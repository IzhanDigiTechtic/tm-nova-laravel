import React, { useState, useEffect, useContext } from "react";
import { Sidebar, SidebarCard } from "../../components/AllComponents";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Themecontext } from "../../ThemeContext";
import { ApiRequest } from "../../apiRequest";
import toast, { Toaster } from "react-hot-toast";
import axios from "../../axios";
import { Helmet } from "react-helmet-async";
const Step4 = () => {
    const { isData, setData } = useContext(Themecontext);
    const retrievedStep1Data = JSON.parse(localStorage.getItem("step1"));
    const [selectedOption, setSelectedOption] = useState({}); // State for selected radio option
    const [error, setError] = useState(false); // State for error
    const [timesService, settimesService] = useState(1);
    const url = window.location.href;
    const urlObj = new URL(url);
    const params = new URLSearchParams(urlObj.search);
    const retrievedStep1Data2 = JSON.parse(localStorage.getItem("step1.2"));
    const quantityData = retrievedStep1Data2.data.find(
        (item) => item.lead_key === "Quantity"
    );
    const quantityValue = quantityData ? quantityData.lead_value : 1;
    const lead_id = params.get("id");
    const [leadData, setLeadData] = useState([
        {
            question: "Basic Check For Availability",
            description: "FREE basic search of USPTO database only",

            answer: 0,
            lead_type: "text",
            lead_step: 4,
            error: false,
            index: "Basic Check For Availability - Price: $0",
        },
        {
            question: "Federal & State Search",
            description:
                "Provides any similar names, logos, or slogans that are registered or pending with the USPTO or in any of the 50 states",
            lead_type: "text",
            lead_step: 4,
            error: false,
            index: "1",
            answer: 99,
        },
        {
            question: "Federal, State & Common Law Search",
            description:
                "Previous plus includes a proprietary search of corporate directories, common law, and domain names",
            lead_type: "text",
            lead_step: 4,
            error: false,
            index: "2",
            answer: 199,
        },
        {
            question: "Global Comprehensive Search",
            description:
                "Previous plus includes searches for pending and registered marks in the World Intellectual Property Organization (WIPO)",
            lead_type: "text",
            lead_step: 4,
            error: false,
            index: "3",
            answer: 349,
        },
    ]); // State for LeadData

    let id = JSON.parse(localStorage?.getItem("sequenceLeadData"));

    const handleSubmit = async (e) => {
        e.preventDefault();
        if (
            !selectedOption.question &&
            !selectedOption.lead_type &&
            !selectedOption.lead_step &&
            !selectedOption.answer
        ) {
            toast.error("Select A Package Please");
            console.log("returned");
            return;
        }

        try {
            const data = await axios.post(
                ApiRequest.leadData,
                {
                    lead_id: lead_id,
                    data: [
                        { ...selectedOption },
                        {
                            question: "Total Price",
                            lead_step: "4",
                            lead_type: "text",
                            answer: quantityValue * selectedOption.answer,
                        },
                    ],
                },
                {
                    headers: {
                        Authorization: `uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB`,
                        // "Content-Type": "application/json",
                    },
                }
            );
            console.log(data);
            console.log(!selectedOption.question);
            if (data) {
                // Save the response data to context
                setData(data);
                localStorage.setItem("step4", JSON.stringify(data?.data?.data));
                // alert(data)
                toast.success("Form submitted successfully!");
                // console.log(selectedOption.answer,"Selected Option Answer");

                window.location.href = `/sequence/step5?id=${lead_id}`;
            }
        } catch (error) {
            console.error("Error:", error);
            // alert("Error submitting the form");
            toast.error("Error submitting the form");
        }
    };
    const [progressnumber, setProgressnumber] = useState({
        percent: "57%",
        topBarName: "Budget-Friendly Trademark Packages",
    });
    return (
        <>
            <SequenceLayout>
                <Helmet>
                    <title>Sequence Step 04 | Trademark Savior</title>
                </Helmet>
                <section>
                    <div className="container">
                        <Toaster position="top-right" reverseOrder={false} />
                        <Sidebar progressnumber={progressnumber} />
                        <div className="row g-3">
                            <div className="col-lg-9">
                                <h2 className=" fw-semibold font-xxs-25px font-md-40px mb-4 mb-lg-10">
                                    <span className=" text-primary">
                                        Search
                                    </span>{" "}
                                    Packages
                                </h2>
                                <form onSubmit={handleSubmit}>
                                    <div className="border-1 border-bottom mb-4 pb-4">
                                        <h1 className="fw-semibold font-xxs-20px font-md-25px d-block text-primary">
                                            Dear{" "}
                                            {retrievedStep1Data.name ? (
                                                retrievedStep1Data?.name
                                            ) : (
                                                <>Client Name</>
                                            )}
                                        </h1>
                                        <p className="font-xxs-15px m-0">
                                            Thank You For Providing Us Your
                                            Trademark Details. Our Senior
                                            Trademark Experts Have Received Your
                                            Information And Are Ready To File
                                            Your US Trademark Application.
                                            Please Select A Below Given Service
                                            Package That Suits Your Requirements
                                            And Recommended Add Ons Identified
                                            By Our System To Move Ahead With The
                                            Process. If You Intend To Apply For
                                            Trademark Of Logo And Name, Then
                                            Cost Of Two Applications Will Be
                                            Added In Your Service Package.
                                        </p>
                                    </div>
                                    <div className="border-1 border-bottom mb-5 pb-4">
                                        <h1 className="fw-semibold font-xxs-16px font-md-20px d-block text-center">
                                            TRADEMARK SEARCH PACKAGES
                                        </h1>
                                        <p className="font-xxs-15px m-0">
                                            Trademark Savior Search is your
                                            gateway to more than 1 billion
                                            records from 50 states & 19,000+
                                            cities and towns from all over the
                                            USA as well as in the UK, and from
                                            196 countries globally. With this
                                            service, Trademark Savior runs a
                                            database check to see if a similar
                                            trademark to yours is already
                                            registered or is applied for
                                            registration. If a conflict is
                                            found, you are notified prior to
                                            filing your application so that you
                                            may make the necessary changes to
                                            avoid rejection.
                                        </p>
                                    </div>

                                    {/* Radio Button Options */}
                                    <div className="row g-3 target-package-step-card-colors">
                                        {leadData?.map((option, index) => (
                                            <div className=" col-md-6">
                                                <div
                                                    key={index}
                                                    className={`d-flex flex-column gap-3 cover-step-package-card h-100 `}
                                                >
                                                    <input
                                                        type="radio"
                                                        className="btn-check"
                                                        name="btncheckbox"
                                                        id={index}
                                                        autoComplete="off"
                                                        hidden
                                                        onChange={() => {
                                                            setSelectedOption(
                                                                option
                                                            );
                                                            setError(false); // Clear error on selection
                                                        }}
                                                    />
                                                    <label
                                                        htmlFor={index}
                                                        className={`btn btn-primary step-package-card rounded-20px p-3 p-lg-4 text-start h-100 ${
                                                            error &&
                                                            !selectedOption &&
                                                            "border border-danger"
                                                        }`}
                                                    >
                                                        <div className="d-flex align-items-center justify-content-between gap-2 flex-wrap flex-lg-nowrap mb-4">
                                                            <span
                                                                className="fw-bold font-xxs-16px font-md-21px lh-sm d-block width-lg"
                                                                style={{
                                                                    "--cstm-lg-width":
                                                                        "50%",
                                                                }}
                                                            >
                                                                {
                                                                    option.question
                                                                }
                                                            </span>
                                                            <h2
                                                                className="text-black m-0 fw-bold"
                                                                style={{
                                                                    fontSize:
                                                                        "clamp(30px, 5vw, 40px)",
                                                                }}
                                                            >
                                                                ${option.answer}
                                                            </h2>
                                                        </div>
                                                        <p className="m-0 font-xxs-15px">
                                                            {option.description}
                                                        </p>
                                                        {option.additionalInfo && (
                                                            <span className="fw-bold font-xxs-16px font-xxl-18px d-block lh-sm mb-2">
                                                                {
                                                                    option.additionalInfo
                                                                }
                                                            </span>
                                                        )}
                                                    </label>
                                                </div>
                                            </div>
                                        ))}
                                    </div>

                                    <p className="font-xxs-15px mt-4 px-3">
                                        For Even More Assurance, You May Want To
                                        Consider A More Detailed Search. While
                                        The Basic Free Search Covers The USPTO,
                                        It Does Not Cover The 50 States, Common
                                        Law, Domain Names, International
                                        Searches Or Include A Detailed Report.
                                        With More Intel, You Can Make Better
                                        Choices. If You Pick One Of These
                                        Options, You Will Still Complete The
                                        Application Now. However, No Application
                                        Will Be Filed With The USPTO Until You
                                        Have Had A Chance To Review Any Of The
                                        Paid Searches, Approve The Application
                                        In Light Of The Searches Or Easily Come
                                        Back Here And Make Some Changes Before
                                        Your Application Is Filed.
                                    </p>
                                    <ul className="mt-5 text-end px-3">
                                        <li>
                                            <button
                                                type="submit" // Change to button to handle submission
                                                className="btn btn-primary py-3 px-4 fw-semibold font-md-17px text-white lh-base d-inline-flex align-items-center gap-4 text-nowrap justify-content-between text-uppercase"
                                            >
                                                Continue To The Next Step
                                            </button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <div className="col-lg-3">
                                <SidebarCard
                                    title={selectedOption.question}
                                    price={selectedOption.answer}
                                    timesmultiplied={quantityValue}
                                    step={4}
                                />
                            </div>
                        </div>
                    </div>
                </section>
            </SequenceLayout>
        </>
    );
};

export default Step4;
