import React, { useState, useContext, useEffect } from "react";
import { Sidebar } from "../../components/AllComponents";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Themecontext, ThemeProvider } from "../../ThemeContext";
import { ApiRequest } from "../../apiRequest";
import axios from "../../axios";
import { useLocation } from "react-router-dom";
import toast, { Toaster } from "react-hot-toast";
import { Helmet } from "react-helmet-async";

const Step2 = () => {
    const { isData, setData } = useContext(Themecontext);
    // console.log(isData?.data?.id);
    const retrievedData = JSON.parse(localStorage.getItem("step1"));
    // console.log(retrievedData);

    // const retrievedData = JSON.parse(localStorage.getItem('step1'));
    // console.log(isData);
    // Get the current URL
    const url = window.location.href;

    // Create a URL object
    const urlObj = new URL(url);

    // Use URLSearchParams to get query parameters
    const params = new URLSearchParams(urlObj.search);
    const id = params.get("id");
    console.log(id);
    const [formData, setFormData] = useState({
        lead_id: id,
        data: [
            {
                question:
                    "Does Your Mark Include A Living Person's Name—Even If A Stage Name Or Pseudonym Or Could It Be Perceived To Include A Person’s Name?",
                answer: "no",
                lead_type: "text",
                lead_step: 2,
                error: false,
            },
            {
                question:
                    "Does Your Mark Include Any Words Other Than English Or Non-Latin Characters? *",
                answer: "no",
                lead_type: "text",
                lead_step: 2,
                error: false,
            },
            {
                question:
                    "Are You Currently Using This Trademark In Your Business? *",
                answer: "no",
                lead_type: "text",
                lead_step: 2,
                error: false,
            },
            {
                question: "Do You Want To Get International Trademark Also?",
                answer: "no",
                lead_type: "text",
                lead_step: 2,
                error: false,
            },
            {
                question:
                    "PLEASE PROVIDE A DESCRIPTION OF YOUR GOODS OR SERVICES Get Help",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
            },
        ],
    });

    const handleInputChange = (e, question) => {
        setFormData((prevState) => {
            // Find the index of the question in the data array
            const index = prevState.data.findIndex(
                (item) => item.question === question
            );
            // If the question is found, create a new data array with the updated answer
            if (index !== -1) {
                const updatedData = [...prevState.data];
                updatedData[index] = {
                    ...updatedData[index],
                    answer: e.target.value,
                    error: false,
                };
                return {
                    ...prevState,
                    data: updatedData,
                };
            }
            return prevState;
        });
    };

    const validateForm = () => {
        const updatedData = formData.data.map((item) => {
            return {
                ...item,
                error: !item.answer, // Set error to true if answer is empty, null, or undefined
            };
        });

        setFormData((prev) => ({
            ...prev,
            data: updatedData,
        }));
        // Return true if all answers are filled, false otherwise
        return updatedData.every((item) => !item.error);
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        if (!validateForm()) {
            // If validation fails, stop form submission
            return;
        }

        try {
            const data = await axios.post(ApiRequest.leadData, formData, {
                headers: {
                    Authorization: `uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB`,
                },
            });

            if (data) {
                // Save the response data to context
                setData(data);
                // alert("Data Saved successfully!");
                localStorage.setItem("step2", JSON.stringify(data?.data?.data));
                // console.log(data?.data?.data);
                toast.success("Data Saved successfully!");
                window.location.href = `/sequence/step3?id=${id}`;
            }
        } catch (error) {
            console.error("Error:", error);
            // alert("Error submitting the form");
            toast.error("Error submitting the form");
        }
    };

    useEffect(() => {
        if (isData?.data?.id) {
            setFormData((prev) => ({
                ...prev,
                lead_id: isData.data.id, // Update the lead_id from context
            }));
        }
    }, [isData]);
    const [progressnumber, setProgressnumber] = useState({
        percent: "28%",
        topBarName: "Trademark Application Process (Step 02)",
    });
    return (
        <SequenceLayout>
            <Helmet>
                <title>Sequence Step 02 | Trademark Savior</title>
            </Helmet>
            <section>
                <div className="container">
                    <Toaster position="top-right" reverseOrder={false} />
                    <Sidebar progressnumber={progressnumber} />
                    <form
                        action=""
                        method="post"
                        className="p-3 p-lg-7 rounded-4"
                        style={{ background: "#f3f3f3" }}
                    >
                        <div className="border-1 border-bottom mb-4">
                            <h1 className="fw-semibold font-xxs-20px font-md-25px d-block text-primary">
                                Dear{" "}
                                {retrievedData.name ? (
                                    retrievedData?.name
                                ) : (
                                    <>Client Name</>
                                )}
                            </h1>
                            <p>
                                Answer Below Mentioned Questions To Help Us
                                Draft Your Paperwork For The Trademark
                                Registration Process Smoothly.
                            </p>
                        </div>

                        <div className="d-flex flex-column gap-4 mb-4">
                            <div className=" border-1 border-bottom pb-4">
                                <p
                                    className={`fw-semibold font-xxl-20px mb-0 d-block`}
                                    style={{
                                        color: formData.data[0].error
                                            ? "red"
                                            : "inherit",
                                    }}
                                >
                                    {formData.data[0].question}
                                </p>
                                <div className="d-flex align-items-center gap-4 mt-3">
                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="yes"
                                            id="questionYes0"
                                            name={formData.data[0].question}
                                            checked={
                                                formData.data[0].answer ===
                                                "yes"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[0].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionYes0"
                                            role="button"
                                        >
                                            Yes
                                        </label>
                                    </div>

                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="no"
                                            id="questionNo0"
                                            name={formData.data[0].question}
                                            checked={
                                                formData.data[0].answer === "no"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[0].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionNo0"
                                            role="button"
                                        >
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div className=" border-1 border-bottom pb-4">
                                <p
                                    className={`fw-semibold font-xxl-20px mb-0 d-block`}
                                    style={{
                                        color: formData.data[1].error
                                            ? "red"
                                            : "inherit",
                                    }}
                                >
                                    {formData.data[1].question}
                                </p>
                                <div className="d-flex align-items-center gap-4 mt-3">
                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="yes"
                                            id="questionYes1"
                                            name={formData.data[1].question}
                                            checked={
                                                formData.data[1].answer ===
                                                "yes"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[1].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionYes1"
                                            role="button"
                                        >
                                            Yes
                                        </label>
                                    </div>

                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="no"
                                            id="questionNo1"
                                            name={formData.data[1].question}
                                            checked={
                                                formData.data[1].answer === "no"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[1].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionNo1"
                                            role="button"
                                        >
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div className=" border-1 border-bottom pb-4">
                                <p
                                    className={`fw-semibold font-xxl-20px mb-0 d-block`}
                                    style={{
                                        color: formData.data[2].error
                                            ? "red"
                                            : "inherit",
                                    }}
                                >
                                    {formData.data[2].question}
                                </p>
                                <div className="d-flex align-items-center gap-4 mt-3">
                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="yes"
                                            id="questionYes2"
                                            name={formData.data[2].question}
                                            checked={
                                                formData.data[2].answer ===
                                                "yes"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[2].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionYes2"
                                            role="button"
                                        >
                                            Yes
                                        </label>
                                    </div>

                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="no"
                                            id="questionNo2"
                                            name={formData.data[2].question}
                                            checked={
                                                formData.data[2].answer === "no"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[2].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionNo2"
                                            role="button"
                                        >
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div className=" border-1 border-bottom pb-4">
                                <p
                                    className={`fw-semibold font-xxl-20px mb-0 d-block`}
                                    style={{
                                        color: formData.data[3].error
                                            ? "red"
                                            : "inherit",
                                    }}
                                >
                                    {formData.data[3].question}
                                </p>
                                <div className="d-flex align-items-center gap-4 mt-3">
                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            name={formData.data[3].question}
                                            value="yes"
                                            id="questionYes3"
                                            checked={
                                                formData.data[3].answer ===
                                                "yes"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[3].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionYes3"
                                            role="button"
                                        >
                                            Yes
                                        </label>
                                    </div>

                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            value="no"
                                            id="questionNo3"
                                            name={formData.data[3].question}
                                            checked={
                                                formData.data[3].answer === "no"
                                            }
                                            onChange={(e) =>
                                                handleInputChange(
                                                    e,
                                                    formData.data[3].question
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="questionNo3"
                                            role="button"
                                        >
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <span
                                className={`fw-semibold font-xxl-20px mb-2 d-block`}
                                style={{
                                    color: formData.data[4].error
                                        ? "red"
                                        : "inherit",
                                }}
                            >
                                PLEASE PROVIDE A DESCRIPTION OF YOUR GOODS OR
                                SERVICES Get Help
                            </span>
                            <p>
                                Start Describing The Goods Are Services Related
                                To Your Mark. Trademark Savior Compares The
                                Description You Provide And Automatically
                                Provides Descriptions From The USPTO ID Manual
                                For Your Consideration.
                            </p>
                            <textarea
                                className="form-control p-3 rounded-4"
                                placeholder="Please provide your details..."
                                onChange={(e) =>
                                    handleInputChange(
                                        e,
                                        formData.data[4].question
                                    )
                                }
                                style={{ minHeight: "150px" }}
                            ></textarea>
                        </div>

                        <ul className="mt-5 text-end">
                            <li>
                                <a
                                    href="/step3"
                                    className="btn btn-primary py-3 px-4 fw-semibold font-md-17px text-white lh-base d-inline-flex align-items-center gap-4 text-nowrap justify-content-between text-uppercase"
                                    onClick={handleSubmit}
                                >
                                    Continue To The Next Step
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
        </SequenceLayout>
    );
};

export default Step2;
