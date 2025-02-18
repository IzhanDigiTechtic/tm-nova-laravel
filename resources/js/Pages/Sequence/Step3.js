import React, { useState, useContext, useEffect } from "react";

import { Sidebar } from "../../components/AllComponents";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Themecontext, ThemeProvider } from "../../ThemeContext";
import { ApiRequest } from "../../apiRequest";
import axios from "../../axios";
import { fromJSON } from "postcss";
import toast, { Toaster } from "react-hot-toast";
import { Helmet } from "react-helmet-async";
const Step3 = () => {
    const retrievedStep1Data = JSON.parse(localStorage.getItem("step1"));
    const url = window.location.href;
    const urlObj = new URL(url);
    const params = new URLSearchParams(urlObj.search);
    const lead_id = params.get("id");
    const [owners, setOwners] = useState([]);
    const [isOrganization, setIsOrganization] = useState(false);
    const [showUSState, setShowUSState] = useState(false);
    const [showNonUSState, setShowNonUSState] = useState(false);
    // const [first, setfirst] = useState(second)
    const [formData, setFormData] = useState({
        lead_id: lead_id,
        data: [
            {
                question:
                    "Will The Trademark Be Owned By An Individual Or An Entity Such As A Corporation Or LLC? *",
                answer: "Individual",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "0",
                required: true,
            },
            {
                question: "Formation",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "1",
                required: false,
            },

            {
                question: "Organization Name",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "2",
                required: false,
            },
            {
                question: "Organization Type",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "3",
                required: false,
            },
            {
                question: "Country Of Foundation",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "4",
                required: false,
            },
            {
                question: "State Of Foundation",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "5",
                required: false,
            },
            {
                question: "Name",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "6",
                required: true,
            },
            {
                question: "Position",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "7",
                required: false,
            },
            {
                question: "Address",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "8",
                required: true,
            },
            {
                question: "Country of Citizenship",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "9",
                required: true,
            },
            {
                question: "State",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "10",
                required: true,
            },
            {
                question: "City",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "11",
                required: true,
            },
            {
                question: "ZipCode",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "12",
                required: true,
            },
            {
                question: "Phone",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "13",
                required: true,
            },
            {
                question: "Email",
                answer: "",
                lead_type: "text",
                lead_step: 3,
                error: false,
                index: "14",
                required: true,
            },
        ],
    });

    const handleOwnershipChange = (value, questionIndex) => {
        setFormData((prevFormData) => {
            const updatedData = prevFormData.data.map((item) => {
                if (item.index === questionIndex) {
                    return {
                        ...item,
                        answer: value,
                    };
                }
                return item;
            });

            return {
                ...prevFormData,
                data: updatedData,
            };
        });

        if (questionIndex === "0") {
            const isOrg = value === "Organization"; // Check if it's an organization

            setIsOrganization(isOrg); // Update state to reflect organization status

            // Toggle 'required' for fields at indexes 1, 2, 3, 4, and 5
            setFormData((prevState) => ({
                ...prevState,
                data: prevState.data.map((item) => {
                    if (["1", "2", "3", "4", "5", "7"].includes(item.index)) {
                        return {
                            ...item,
                            required: !item.required, // Toggle the required value
                        };
                    }
                    return item; // Keep other fields unchanged
                }),
            }));
        }

        if (questionIndex === "1") {
            setShowUSState(value === "US-Based");
            setShowNonUSState(value === "Non-US-Based");
        }
    };

    const handleChange = (e, index) => {
        setFormData((prevState) => {
            if (index !== -1) {
                const updatedData = [...prevState.data];
                updatedData[index] = {
                    ...updatedData[index],
                    answer: e.target.value,
                    // error: updatedData[index].required,
                };
                // console.log()
                return {
                    ...prevState,
                    data: updatedData,
                };
            }
            return prevState;
        });
    };
    const handleChange2 = (e, index) => {
        setFormData((prevState) => {
            if (index !== -1) {
                const updatedData = [...prevState.data];
                updatedData[index] = {
                    ...updatedData[index],
                    answer: e,
                    error: updatedData[index].required,
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
            if (item.required) {
                return {
                    ...item,
                    error: !item.answer, // Set error to true if the answer is empty and the field is required
                };
            }
            return item; // Skip validation if the field is not required
        });

        setFormData((prev) => ({
            ...prev,
            data: updatedData,
        }));

        // Return true if all required fields are filled (no errors), false otherwise
        return updatedData.every((item) => !item.error || !item.required);
    };

    const handleAddOwner = () => {
        const newOwner = {
            name: formData.data.find((item) => item.index == 6)?.answer || "",
            email: formData.data.find((item) => item.index == 14)?.answer || "",
            phone: formData.data.find((item) => item.index == 13)?.answer || "",
            country:
                formData.data.find((item) => item.index == 9)?.answer || "",
        };
        setOwners((prev) => [...prev, newOwner]);
    };

    const handleDeleteOwner = (index) => {
        setOwners((prev) => prev.filter((_, i) => i !== index));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        try {
            // const filteredAnswers = formData.data.filter(item => item.answer != "");
            const filteredAnswers = formData.data.filter(
                (item) => item.required
            );

            const isValid = validateForm(filteredAnswers);
            // console.log(formData.data)
            console.log(filteredAnswers);
            console.log(isValid);
            if (!isValid) {
                // Handle invalid form (e.g., show an alert or display error messages)
                toast.error("Please submit all the required fields");
                return;
            }
            // return;
            const data = await axios.post(
                ApiRequest.leadData,
                {
                    lead_id: lead_id,
                    data: filteredAnswers,
                },
                {
                    headers: {
                        Authorization: `uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB`,
                        // "Content-Type": "application/json",
                    },
                }
            );
            if (data) {
                if (data?.data?.status == "success") {
                    localStorage.setItem(
                        "step3",
                        JSON.stringify(data?.data?.data)
                    );
                    handleAddOwner();
                    setFormData({
                        lead_id: lead_id,
                        data: [
                            {
                                question:
                                    "Will The Trademark Be Owned By An Individual Or An Entity Such As A Corporation Or LLC? *",
                                answer: "Individual",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "0",
                                required: true,
                            },
                            {
                                question: "Formation",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "1",
                                required: false,
                            },

                            {
                                question: "Organization Name",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "2",
                                required: false,
                            },
                            {
                                question: "Organization Type",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "3",
                                required: false,
                            },
                            {
                                question: "Country Of Foundation",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "4",
                                required: false,
                            },
                            {
                                question: "State Of Foundation",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "5",
                                required: false,
                            },
                            {
                                question: "Name",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "6",
                                required: true,
                            },
                            {
                                question: "Position",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "7",
                                required: false,
                            },
                            {
                                question: "Address",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "8",
                                required: true,
                            },
                            {
                                question: "Country of Citizenship",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "9",
                                required: true,
                            },
                            {
                                question: "State",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "10",
                                required: true,
                            },
                            {
                                question: "City",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "11",
                                required: true,
                            },
                            {
                                question: "ZipCode",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "12",
                                required: true,
                            },
                            {
                                question: "Phone",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "13",
                                required: true,
                            },
                            {
                                question: "Email",
                                answer: "",
                                lead_type: "text",
                                lead_step: 3,
                                error: false,
                                index: "14",
                                required: true,
                            },
                        ],
                    });
                }
            }
        } catch (error) {
            console.error("Error:", error);
            // alert("Error submitting the form");
            toast.error("Error Submitting the form");
        }
    };
    const [progressnumber, setProgressnumber] = useState({
        percent: "42%",
        topBarName: "Initial Assessment Form (IAF)",
        topBarDescription:
            "Fill out this brief form given below. It will take less than 60 seconds to complete it!",
    });
    return (
        <SequenceLayout>
            <Helmet>
                <title>Sequence Step 03 | Trademark Savior</title>
            </Helmet>
            <section>
                <div className="container">
                    <Toaster position="top-right" reverseOrder={false} />
                    <Sidebar progressnumber={progressnumber} />
                    <form
                        onSubmit={handleSubmit}
                        className="p-3 p-lg-7 rounded-4"
                        style={{ background: "#f3f3f3" }}
                    >
                        <div className="border-1 border-bottom mb-4">
                            <span className="fw-semibold font-xxs-20px font-md-25px d-block text-primary">
                                Dear{" "}
                                {retrievedStep1Data.name ? (
                                    retrievedStep1Data?.name
                                ) : (
                                    <>Client Name</>
                                )}
                            </span>
                            <p>
                                Next step is to fill out the below given Initail
                                Assesmdent Form (IAF), which is mandatory.
                            </p>
                        </div>

                        <div className="d-flex flex-column gap-4 border-1 border-bottom mb-4 pb-4">
                            <div>
                                <p className="fw-semibold font-xxl-20px mb-0 d-block">
                                    Will The Trademark Be Owned By An Individual
                                    Or An Entity Such As A Corporation Or LLC? *
                                </p>
                                <div className="d-flex align-items-center gap-4 mt-3">
                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            name="ownership"
                                            id="Individual"
                                            value="Individual"
                                            checked={
                                                formData.data[0].answer ==
                                                "Individual"
                                            }
                                            required={formData.data[0].required}
                                            onChange={(e) =>
                                                handleOwnershipChange(
                                                    e.target.value,
                                                    formData.data[0].index
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="Individual"
                                            role="button"
                                        >
                                            Individual
                                        </label>
                                    </div>

                                    <div className="form-check d-flex align-items-center gap-2 p-0">
                                        <input
                                            className="form-check-input m-0"
                                            type="radio"
                                            name="ownership"
                                            id="Organization"
                                            value="Organization"
                                            checked={
                                                formData.data[0].answer ==
                                                "Organization"
                                            }
                                            required={formData.data[0].required}
                                            onChange={(e) =>
                                                handleOwnershipChange(
                                                    e.target.value,
                                                    formData.data[0].index
                                                )
                                            }
                                            style={{
                                                width: "20px",
                                                height: "20px",
                                            }}
                                        />
                                        <label
                                            className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                            htmlFor="Organization"
                                            role="button"
                                        >
                                            Organization
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {isOrganization && (
                                <>
                                    <div>
                                        <p className="fw-semibold font-xxl-20px mb-0 d-block">
                                            Formation *
                                        </p>
                                        <div className="d-flex align-items-center gap-4 mt-3">
                                            <div className="form-check d-flex align-items-center gap-2 p-0">
                                                <input
                                                    className={`form-check-input m-0 ${
                                                        formData.data[1].error
                                                            ? "border border-danger"
                                                            : ""
                                                    }`}
                                                    type="radio"
                                                    name="Formation"
                                                    id="US-Based"
                                                    value="US-Based"
                                                    required={
                                                        formData.data[1]
                                                            .required
                                                    }
                                                    onChange={(e) => {
                                                        handleOwnershipChange(
                                                            e.target.value,
                                                            formData.data[1]
                                                                .index
                                                        );
                                                        handleChange2(
                                                            "USA",
                                                            formData.data[4]
                                                                .index
                                                        );
                                                    }}
                                                    style={{
                                                        width: "20px",
                                                        height: "20px",
                                                    }}
                                                />
                                                <label
                                                    className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                                    htmlFor="US-Based"
                                                    role="button"
                                                >
                                                    US Based
                                                </label>
                                            </div>

                                            <div className="form-check d-flex align-items-center gap-2 p-0">
                                                <input
                                                    className={`form-check-input m-0 ${
                                                        formData.data[2].error
                                                            ? "border border-danger"
                                                            : ""
                                                    }`}
                                                    type="radio"
                                                    name="Formation"
                                                    id="Non-US-Based"
                                                    value="Non-US-Based"
                                                    required={
                                                        formData.data[1]
                                                            .required
                                                    }
                                                    onChange={(e) => {
                                                        handleOwnershipChange(
                                                            e.target.value,
                                                            formData.data[1]
                                                                .index
                                                        );
                                                        handleChange2(
                                                            e.target.value,
                                                            formData.data[5]
                                                                .index
                                                        );
                                                    }}
                                                    style={{
                                                        width: "20px",
                                                        height: "20px",
                                                    }}
                                                />
                                                <label
                                                    className="form-check-label font-xxl-20px hover_opacity-08 fw-semibold"
                                                    htmlFor="Non-US-Based"
                                                    role="button"
                                                >
                                                    Non US Based
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="row g-4">
                                        <div className="col-md-6 col-lg-4">
                                            <label
                                                htmlFor=""
                                                className="fw-semibold font-xxl-22px mb-2 d-block"
                                            >
                                                Organization Name *
                                            </label>
                                            <input
                                                type="text"
                                                name="organizationName"
                                                className={`form-control p-3 rounded-4 ${
                                                    formData.data[2].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                required={
                                                    formData.data[2].required
                                                }
                                                value={formData.data[2].answer}
                                                placeholder="Organization Name *"
                                                onChange={(e) =>
                                                    handleChange(
                                                        e,
                                                        formData.data[2].index
                                                    )
                                                }
                                            />
                                        </div>
                                        <div className="col-md-6 col-lg-4">
                                            <label
                                                htmlFor=""
                                                className="fw-semibold font-xxl-22px mb-2 d-block"
                                            >
                                                Organization Type *
                                            </label>
                                            <select
                                                name="organizationType"
                                                className={`form-control p-3 rounded-4 ${
                                                    formData.data[3].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                required={
                                                    formData.data[3].required
                                                }
                                                defaultValue={0}
                                                onChange={(e) =>
                                                    handleChange(
                                                        e,
                                                        formData.data[3].index
                                                    )
                                                }
                                            >
                                                <option value="0" disabled>
                                                    Select Organization Type
                                                </option>
                                                <option value="Corporation">
                                                    Corporation
                                                </option>
                                                <option value="LLC">
                                                    Limited Liability Company
                                                    (LLC)
                                                </option>
                                                <option value="Partnership">
                                                    Partnership
                                                </option>
                                                <option value="Non-Profit Corporation">
                                                    Non-Profit Corporation
                                                </option>
                                                <option value="Non-Profit Organization">
                                                    Non-Profit Organization
                                                </option>
                                                <option value="Other Business Type">
                                                    Other Business Type
                                                </option>
                                                <option value="C Corporation">
                                                    C Corporation
                                                </option>
                                                <option value="S Corporation">
                                                    S Corporation
                                                </option>
                                                <option value="Trust">
                                                    Trust
                                                </option>
                                            </select>
                                        </div>
                                        <div
                                            className="col-md-6 col-lg-4"
                                            style={{
                                                display: showUSState
                                                    ? "block"
                                                    : "none",
                                            }}
                                        >
                                            <label
                                                htmlFor=""
                                                className="fw-semibold font-xxl-22px mb-2 d-block"
                                            >
                                                State Of Formation *
                                            </label>
                                            <select
                                                name="Stateoffoundation"
                                                className={`form-control p-3 rounded-4 ${
                                                    formData.data[5].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                defaultValue={0}
                                                // WE HAD DEFAULT VALUE    formData.data[5].answer I Changed it to 0
                                                required={
                                                    formData.data[5].required
                                                }
                                                onChange={(e) => {
                                                    handleChange(
                                                        e,
                                                        formData.data[5].index
                                                    );
                                                    // Add the second function here
                                                }}
                                            >
                                                <option value="0" disabled>
                                                    Select State
                                                </option>
                                                <option value="Alabama">
                                                    Alabama
                                                </option>
                                                <option value="Alaska">
                                                    Alaska
                                                </option>
                                                <option value="Arizona">
                                                    Arizona
                                                </option>
                                                <option value="Arkansas">
                                                    Arkansas
                                                </option>
                                                <option value="California">
                                                    California
                                                </option>
                                                <option value="Colorado">
                                                    Colorado
                                                </option>
                                                <option value="Connecticut">
                                                    Connecticut
                                                </option>
                                                <option value="Delaware">
                                                    Delaware
                                                </option>
                                                <option value="Florida">
                                                    Florida
                                                </option>
                                                <option value="Georgia">
                                                    Georgia
                                                </option>
                                                <option value="Hawaii">
                                                    Hawaii
                                                </option>
                                                <option value="Idaho">
                                                    Idaho
                                                </option>
                                                <option value="Illinois">
                                                    Illinois
                                                </option>
                                                <option value="Indiana">
                                                    Indiana
                                                </option>
                                                <option value="Iowa">
                                                    Iowa
                                                </option>
                                                <option value="Kansas">
                                                    Kansas
                                                </option>
                                                <option value="Kentucky">
                                                    Kentucky
                                                </option>
                                                <option value="Louisiana">
                                                    Louisiana
                                                </option>
                                                <option value="Maine">
                                                    Maine
                                                </option>
                                                <option value="Maryland">
                                                    Maryland
                                                </option>
                                                <option value="Massachusetts">
                                                    Massachusetts
                                                </option>
                                                <option value="Michigan">
                                                    Michigan
                                                </option>
                                                <option value="Minnesota">
                                                    Minnesota
                                                </option>
                                                <option value="Mississippi">
                                                    Mississippi
                                                </option>
                                                <option value="Missouri">
                                                    Missouri
                                                </option>
                                                <option value="Montana">
                                                    Montana
                                                </option>
                                                <option value="Nebraska">
                                                    Nebraska
                                                </option>
                                                <option value="Nevada">
                                                    Nevada
                                                </option>
                                                <option value="New Hampshire">
                                                    New Hampshire
                                                </option>
                                                <option value="New Jersey">
                                                    New Jersey
                                                </option>
                                                <option value="New Mexico">
                                                    New Mexico
                                                </option>
                                                <option value="New York">
                                                    New York
                                                </option>
                                                <option value="North Carolina">
                                                    North Carolina
                                                </option>
                                                <option value="North Dakota">
                                                    North Dakota
                                                </option>
                                                <option value="Ohio">
                                                    Ohio
                                                </option>
                                                <option value="Oklahoma">
                                                    Oklahoma
                                                </option>
                                                <option value="Oregon">
                                                    Oregon
                                                </option>
                                                <option value="Pennsylvania">
                                                    Pennsylvania
                                                </option>
                                                <option value="Rhode Island">
                                                    Rhode Island
                                                </option>
                                                <option value="South Carolina">
                                                    South Carolina
                                                </option>
                                                <option value="South Dakota">
                                                    South Dakota
                                                </option>
                                                <option value="Tennessee">
                                                    Tennessee
                                                </option>
                                                <option value="Texas">
                                                    Texas
                                                </option>
                                                <option value="Utah">
                                                    Utah
                                                </option>
                                                <option value="Vermont">
                                                    Vermont
                                                </option>
                                                <option value="Virginia">
                                                    Virginia
                                                </option>
                                                <option value="Washington">
                                                    Washington
                                                </option>
                                                <option value="West Virginia">
                                                    West Virginia
                                                </option>
                                                <option value="Wisconsin">
                                                    Wisconsin
                                                </option>
                                                <option value="Wyoming">
                                                    Wyoming
                                                </option>
                                            </select>
                                        </div>
                                        <div
                                            className="col-md-6 col-lg-4"
                                            style={{
                                                display: showNonUSState
                                                    ? "block"
                                                    : "none",
                                            }}
                                        >
                                            <label
                                                htmlFor=""
                                                className="fw-semibold font-xxl-22px mb-2 d-block"
                                            >
                                                Country of Foundation *
                                            </label>
                                            <select
                                                name="country of foundation"
                                                className={`form-control p-3 rounded-4 ${
                                                    formData.data[4].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                defaultValue={
                                                    formData.data[4].answer
                                                }
                                                required={
                                                    formData.data[4].required
                                                }
                                                onChange={(e) =>
                                                    handleChange(
                                                        e,
                                                        formData.data[4].index
                                                    )
                                                }
                                            >
                                                <option value="0" disabled>
                                                    Select Country
                                                </option>
                                                {[
                                                    {
                                                        name: "Afghanistan",
                                                        code: "AF",
                                                    },
                                                    {
                                                        name: "Åland Islands",
                                                        code: "AX",
                                                    },
                                                    {
                                                        name: "Albania",
                                                        code: "AL",
                                                    },
                                                    {
                                                        name: "Algeria",
                                                        code: "DZ",
                                                    },
                                                    {
                                                        name: "American Samoa",
                                                        code: "AS",
                                                    },
                                                    {
                                                        name: "Andorra",
                                                        code: "AD",
                                                    },
                                                    {
                                                        name: "Angola",
                                                        code: "AO",
                                                    },
                                                    {
                                                        name: "Anguilla",
                                                        code: "AI",
                                                    },
                                                    {
                                                        name: "Antarctica",
                                                        code: "AQ",
                                                    },
                                                    {
                                                        name: "Antigua and Barbuda",
                                                        code: "AG",
                                                    },
                                                    {
                                                        name: "Argentina",
                                                        code: "AR",
                                                    },
                                                    {
                                                        name: "Armenia",
                                                        code: "AM",
                                                    },
                                                    {
                                                        name: "Aruba",
                                                        code: "AW",
                                                    },
                                                    {
                                                        name: "Australia",
                                                        code: "AU",
                                                    },
                                                    {
                                                        name: "Austria",
                                                        code: "AT",
                                                    },
                                                    {
                                                        name: "Azerbaijan",
                                                        code: "AZ",
                                                    },
                                                    {
                                                        name: "Bahamas",
                                                        code: "BS",
                                                    },
                                                    {
                                                        name: "Bahrain",
                                                        code: "BH",
                                                    },
                                                    {
                                                        name: "Bangladesh",
                                                        code: "BD",
                                                    },
                                                    {
                                                        name: "Barbados",
                                                        code: "BB",
                                                    },
                                                    {
                                                        name: "Belarus",
                                                        code: "BY",
                                                    },
                                                    {
                                                        name: "Belgium",
                                                        code: "BE",
                                                    },
                                                    {
                                                        name: "Belize",
                                                        code: "BZ",
                                                    },
                                                    {
                                                        name: "Benin",
                                                        code: "BJ",
                                                    },
                                                    {
                                                        name: "Bermuda",
                                                        code: "BM",
                                                    },
                                                    {
                                                        name: "Bhutan",
                                                        code: "BT",
                                                    },
                                                    {
                                                        name: "Bolivia",
                                                        code: "BO",
                                                    },
                                                    {
                                                        name: "Bosnia and Herzegovina",
                                                        code: "BA",
                                                    },
                                                    {
                                                        name: "Botswana",
                                                        code: "BW",
                                                    },
                                                    {
                                                        name: "Bouvet Island",
                                                        code: "BV",
                                                    },
                                                    {
                                                        name: "Brazil",
                                                        code: "BR",
                                                    },
                                                    {
                                                        name: "British Indian Ocean Territory",
                                                        code: "IO",
                                                    },
                                                    {
                                                        name: "Brunei Darussalam",
                                                        code: "BN",
                                                    },
                                                    {
                                                        name: "Bulgaria",
                                                        code: "BG",
                                                    },
                                                    {
                                                        name: "Burkina Faso",
                                                        code: "BF",
                                                    },
                                                    {
                                                        name: "Burundi",
                                                        code: "BI",
                                                    },
                                                    {
                                                        name: "Cambodia",
                                                        code: "KH",
                                                    },
                                                    {
                                                        name: "Cameroon",
                                                        code: "CM",
                                                    },
                                                    {
                                                        name: "Canada",
                                                        code: "CA",
                                                    },
                                                    {
                                                        name: "Cape Verde",
                                                        code: "CV",
                                                    },
                                                    {
                                                        name: "Cayman Islands",
                                                        code: "KY",
                                                    },
                                                    {
                                                        name: "Central African Republic",
                                                        code: "CF",
                                                    },
                                                    {
                                                        name: "Chad",
                                                        code: "TD",
                                                    },
                                                    {
                                                        name: "Chile",
                                                        code: "CL",
                                                    },
                                                    {
                                                        name: "China",
                                                        code: "CN",
                                                    },
                                                    {
                                                        name: "Christmas Island",
                                                        code: "CX",
                                                    },
                                                    {
                                                        name: "Cocos (Keeling) Islands",
                                                        code: "CC",
                                                    },
                                                    {
                                                        name: "Colombia",
                                                        code: "CO",
                                                    },
                                                    {
                                                        name: "Comoros",
                                                        code: "KM",
                                                    },
                                                    {
                                                        name: "Congo",
                                                        code: "CG",
                                                    },
                                                    {
                                                        name: "Congo, The Democratic Republic of the",
                                                        code: "CD",
                                                    },
                                                    {
                                                        name: "Cook Islands",
                                                        code: "CK",
                                                    },
                                                    {
                                                        name: "Costa Rica",
                                                        code: "CR",
                                                    },
                                                    {
                                                        name: "Cote D'Ivoire",
                                                        code: "CI",
                                                    },
                                                    {
                                                        name: "Croatia",
                                                        code: "HR",
                                                    },
                                                    {
                                                        name: "Cuba",
                                                        code: "CU",
                                                    },
                                                    {
                                                        name: "Cyprus",
                                                        code: "CY",
                                                    },
                                                    {
                                                        name: "Czech Republic",
                                                        code: "CZ",
                                                    },
                                                    {
                                                        name: "Denmark",
                                                        code: "DK",
                                                    },
                                                    {
                                                        name: "Djibouti",
                                                        code: "DJ",
                                                    },
                                                    {
                                                        name: "Dominica",
                                                        code: "DM",
                                                    },
                                                    {
                                                        name: "Dominican Republic",
                                                        code: "DO",
                                                    },
                                                    {
                                                        name: "Ecuador",
                                                        code: "EC",
                                                    },
                                                    {
                                                        name: "Egypt",
                                                        code: "EG",
                                                    },
                                                    {
                                                        name: "El Salvador",
                                                        code: "SV",
                                                    },
                                                    {
                                                        name: "Equatorial Guinea",
                                                        code: "GQ",
                                                    },
                                                    {
                                                        name: "Eritrea",
                                                        code: "ER",
                                                    },
                                                    {
                                                        name: "Estonia",
                                                        code: "EE",
                                                    },
                                                    {
                                                        name: "Ethiopia",
                                                        code: "ET",
                                                    },
                                                    {
                                                        name: "Falkland Islands (Malvinas)",
                                                        code: "FK",
                                                    },
                                                    {
                                                        name: "Faroe Islands",
                                                        code: "FO",
                                                    },
                                                    {
                                                        name: "Fiji",
                                                        code: "FJ",
                                                    },
                                                    {
                                                        name: "Finland",
                                                        code: "FI",
                                                    },
                                                    {
                                                        name: "France",
                                                        code: "FR",
                                                    },
                                                    {
                                                        name: "French Guiana",
                                                        code: "GF",
                                                    },
                                                    {
                                                        name: "French Polynesia",
                                                        code: "PF",
                                                    },
                                                    {
                                                        name: "French Southern Territories",
                                                        code: "TF",
                                                    },
                                                    {
                                                        name: "Gabon",
                                                        code: "GA",
                                                    },
                                                    {
                                                        name: "Gambia",
                                                        code: "GM",
                                                    },
                                                    {
                                                        name: "Georgia",
                                                        code: "GE",
                                                    },
                                                    {
                                                        name: "Germany",
                                                        code: "DE",
                                                    },
                                                    {
                                                        name: "Ghana",
                                                        code: "GH",
                                                    },
                                                    {
                                                        name: "Gibraltar",
                                                        code: "GI",
                                                    },
                                                    {
                                                        name: "Greece",
                                                        code: "GR",
                                                    },
                                                    {
                                                        name: "Greenland",
                                                        code: "GL",
                                                    },
                                                    {
                                                        name: "Grenada",
                                                        code: "GD",
                                                    },
                                                    {
                                                        name: "Guadeloupe",
                                                        code: "GP",
                                                    },
                                                    {
                                                        name: "Guam",
                                                        code: "GU",
                                                    },
                                                    {
                                                        name: "Guatemala",
                                                        code: "GT",
                                                    },
                                                    {
                                                        name: "Guernsey",
                                                        code: "GG",
                                                    },
                                                    {
                                                        name: "Guinea",
                                                        code: "GN",
                                                    },
                                                    {
                                                        name: "Guinea-Bissau",
                                                        code: "GW",
                                                    },
                                                    {
                                                        name: "Guyana",
                                                        code: "GY",
                                                    },
                                                    {
                                                        name: "Haiti",
                                                        code: "HT",
                                                    },
                                                    {
                                                        name: "Heard Island and Mcdonald Islands",
                                                        code: "HM",
                                                    },
                                                    {
                                                        name: "Holy See (Vatican City State)",
                                                        code: "VA",
                                                    },
                                                    {
                                                        name: "Honduras",
                                                        code: "HN",
                                                    },
                                                    {
                                                        name: "Hong Kong",
                                                        code: "HK",
                                                    },
                                                    {
                                                        name: "Hungary",
                                                        code: "HU",
                                                    },
                                                    {
                                                        name: "Iceland",
                                                        code: "IS",
                                                    },
                                                    {
                                                        name: "India",
                                                        code: "IN",
                                                    },
                                                    {
                                                        name: "Indonesia",
                                                        code: "ID",
                                                    },
                                                    {
                                                        name: "Iran, Islamic Republic Of",
                                                        code: "IR",
                                                    },
                                                    {
                                                        name: "Iraq",
                                                        code: "IQ",
                                                    },
                                                    {
                                                        name: "Ireland",
                                                        code: "IE",
                                                    },
                                                    {
                                                        name: "Isle of Man",
                                                        code: "IM",
                                                    },
                                                    {
                                                        name: "Israel",
                                                        code: "IL",
                                                    },
                                                    {
                                                        name: "Italy",
                                                        code: "IT",
                                                    },
                                                    {
                                                        name: "Jamaica",
                                                        code: "JM",
                                                    },
                                                    {
                                                        name: "Japan",
                                                        code: "JP",
                                                    },
                                                    {
                                                        name: "Jersey",
                                                        code: "JE",
                                                    },
                                                    {
                                                        name: "Jordan",
                                                        code: "JO",
                                                    },
                                                    {
                                                        name: "Kazakhstan",
                                                        code: "KZ",
                                                    },
                                                    {
                                                        name: "Kenya",
                                                        code: "KE",
                                                    },
                                                    {
                                                        name: "Kiribati",
                                                        code: "KI",
                                                    },
                                                    {
                                                        name: "Korea, Democratic People'S Republic of",
                                                        code: "KP",
                                                    },
                                                    {
                                                        name: "Korea, Republic of",
                                                        code: "KR",
                                                    },
                                                    {
                                                        name: "Kuwait",
                                                        code: "KW",
                                                    },
                                                    {
                                                        name: "Kyrgyzstan",
                                                        code: "KG",
                                                    },
                                                    {
                                                        name: "Lao People'S Democratic Republic",
                                                        code: "LA",
                                                    },
                                                    {
                                                        name: "Latvia",
                                                        code: "LV",
                                                    },
                                                    {
                                                        name: "Lebanon",
                                                        code: "LB",
                                                    },
                                                    {
                                                        name: "Lesotho",
                                                        code: "LS",
                                                    },
                                                    {
                                                        name: "Liberia",
                                                        code: "LR",
                                                    },
                                                    {
                                                        name: "Libyan Arab Jamahiriya",
                                                        code: "LY",
                                                    },
                                                    {
                                                        name: "Liechtenstein",
                                                        code: "LI",
                                                    },
                                                    {
                                                        name: "Lithuania",
                                                        code: "LT",
                                                    },
                                                    {
                                                        name: "Luxembourg",
                                                        code: "LU",
                                                    },
                                                    {
                                                        name: "Macao",
                                                        code: "MO",
                                                    },
                                                    {
                                                        name: "Macedonia, The Former Yugoslav Republic of",
                                                        code: "MK",
                                                    },
                                                    {
                                                        name: "Madagascar",
                                                        code: "MG",
                                                    },
                                                    {
                                                        name: "Malawi",
                                                        code: "MW",
                                                    },
                                                    {
                                                        name: "Malaysia",
                                                        code: "MY",
                                                    },
                                                    {
                                                        name: "Maldives",
                                                        code: "MV",
                                                    },
                                                    {
                                                        name: "Mali",
                                                        code: "ML",
                                                    },
                                                    {
                                                        name: "Malta",
                                                        code: "MT",
                                                    },
                                                    {
                                                        name: "Marshall Islands",
                                                        code: "MH",
                                                    },
                                                    {
                                                        name: "Martinique",
                                                        code: "MQ",
                                                    },
                                                    {
                                                        name: "Mauritania",
                                                        code: "MR",
                                                    },
                                                    {
                                                        name: "Mauritius",
                                                        code: "MU",
                                                    },
                                                    {
                                                        name: "Mayotte",
                                                        code: "YT",
                                                    },
                                                    {
                                                        name: "Mexico",
                                                        code: "MX",
                                                    },
                                                    {
                                                        name: "Micronesia, Federated States of",
                                                        code: "FM",
                                                    },
                                                    {
                                                        name: "Moldova, Republic of",
                                                        code: "MD",
                                                    },
                                                    {
                                                        name: "Monaco",
                                                        code: "MC",
                                                    },
                                                    {
                                                        name: "Mongolia",
                                                        code: "MN",
                                                    },
                                                    {
                                                        name: "Montserrat",
                                                        code: "MS",
                                                    },
                                                    {
                                                        name: "Morocco",
                                                        code: "MA",
                                                    },
                                                    {
                                                        name: "Mozambique",
                                                        code: "MZ",
                                                    },
                                                    {
                                                        name: "Myanmar",
                                                        code: "MM",
                                                    },
                                                    {
                                                        name: "Namibia",
                                                        code: "NA",
                                                    },
                                                    {
                                                        name: "Nauru",
                                                        code: "NR",
                                                    },
                                                    {
                                                        name: "Nepal",
                                                        code: "NP",
                                                    },
                                                    {
                                                        name: "Netherlands",
                                                        code: "NL",
                                                    },
                                                    {
                                                        name: "Netherlands Antilles",
                                                        code: "AN",
                                                    },
                                                    {
                                                        name: "New Caledonia",
                                                        code: "NC",
                                                    },
                                                    {
                                                        name: "New Zealand",
                                                        code: "NZ",
                                                    },
                                                    {
                                                        name: "Nicaragua",
                                                        code: "NI",
                                                    },
                                                    {
                                                        name: "Niger",
                                                        code: "NE",
                                                    },
                                                    {
                                                        name: "Nigeria",
                                                        code: "NG",
                                                    },
                                                    {
                                                        name: "Niue",
                                                        code: "NU",
                                                    },
                                                    {
                                                        name: "Norfolk Island",
                                                        code: "NF",
                                                    },
                                                    {
                                                        name: "Northern Mariana Islands",
                                                        code: "MP",
                                                    },
                                                    {
                                                        name: "Norway",
                                                        code: "NO",
                                                    },
                                                    {
                                                        name: "Oman",
                                                        code: "OM",
                                                    },
                                                    {
                                                        name: "Pakistan",
                                                        code: "PK",
                                                    },
                                                    {
                                                        name: "Palau",
                                                        code: "PW",
                                                    },
                                                    {
                                                        name: "Palestinian Territory, Occupied",
                                                        code: "PS",
                                                    },
                                                    {
                                                        name: "Panama",
                                                        code: "PA",
                                                    },
                                                    {
                                                        name: "Papua New Guinea",
                                                        code: "PG",
                                                    },
                                                    {
                                                        name: "Paraguay",
                                                        code: "PY",
                                                    },
                                                    {
                                                        name: "Peru",
                                                        code: "PE",
                                                    },
                                                    {
                                                        name: "Philippines",
                                                        code: "PH",
                                                    },
                                                    {
                                                        name: "Pitcairn",
                                                        code: "PN",
                                                    },
                                                    {
                                                        name: "Poland",
                                                        code: "PL",
                                                    },
                                                    {
                                                        name: "Portugal",
                                                        code: "PT",
                                                    },
                                                    {
                                                        name: "Puerto Rico",
                                                        code: "PR",
                                                    },
                                                    {
                                                        name: "Qatar",
                                                        code: "QA",
                                                    },
                                                    {
                                                        name: "Reunion",
                                                        code: "RE",
                                                    },
                                                    {
                                                        name: "Romania",
                                                        code: "RO",
                                                    },
                                                    {
                                                        name: "Russian Federation",
                                                        code: "RU",
                                                    },
                                                    {
                                                        name: "RWANDA",
                                                        code: "RW",
                                                    },
                                                    {
                                                        name: "Saint Helena",
                                                        code: "SH",
                                                    },
                                                    {
                                                        name: "Saint Kitts and Nevis",
                                                        code: "KN",
                                                    },
                                                    {
                                                        name: "Saint Lucia",
                                                        code: "LC",
                                                    },
                                                    {
                                                        name: "Saint Pierre and Miquelon",
                                                        code: "PM",
                                                    },
                                                    {
                                                        name: "Saint Vincent and the Grenadines",
                                                        code: "VC",
                                                    },
                                                    {
                                                        name: "Samoa",
                                                        code: "WS",
                                                    },
                                                    {
                                                        name: "San Marino",
                                                        code: "SM",
                                                    },
                                                    {
                                                        name: "Sao Tome and Principe",
                                                        code: "ST",
                                                    },
                                                    {
                                                        name: "Saudi Arabia",
                                                        code: "SA",
                                                    },
                                                    {
                                                        name: "Senegal",
                                                        code: "SN",
                                                    },
                                                    {
                                                        name: "Serbia and Montenegro",
                                                        code: "CS",
                                                    },
                                                    {
                                                        name: "Seychelles",
                                                        code: "SC",
                                                    },
                                                    {
                                                        name: "Sierra Leone",
                                                        code: "SL",
                                                    },
                                                    {
                                                        name: "Singapore",
                                                        code: "SG",
                                                    },
                                                    {
                                                        name: "Slovakia",
                                                        code: "SK",
                                                    },
                                                    {
                                                        name: "Slovenia",
                                                        code: "SI",
                                                    },
                                                    {
                                                        name: "Solomon Islands",
                                                        code: "SB",
                                                    },
                                                    {
                                                        name: "Somalia",
                                                        code: "SO",
                                                    },
                                                    {
                                                        name: "South Africa",
                                                        code: "ZA",
                                                    },
                                                    {
                                                        name: "South Georgia and the South Sandwich Islands",
                                                        code: "GS",
                                                    },
                                                    {
                                                        name: "Spain",
                                                        code: "ES",
                                                    },
                                                    {
                                                        name: "Sri Lanka",
                                                        code: "LK",
                                                    },
                                                    {
                                                        name: "Sudan",
                                                        code: "SD",
                                                    },
                                                    {
                                                        name: "Suriname",
                                                        code: "SR",
                                                    },
                                                    {
                                                        name: "Svalbard and Jan Mayen",
                                                        code: "SJ",
                                                    },
                                                    {
                                                        name: "Swaziland",
                                                        code: "SZ",
                                                    },
                                                    {
                                                        name: "Sweden",
                                                        code: "SE",
                                                    },
                                                    {
                                                        name: "Switzerland",
                                                        code: "CH",
                                                    },
                                                    {
                                                        name: "Syrian Arab Republic",
                                                        code: "SY",
                                                    },
                                                    {
                                                        name: "Taiwan, Province of China",
                                                        code: "TW",
                                                    },
                                                    {
                                                        name: "Tajikistan",
                                                        code: "TJ",
                                                    },
                                                    {
                                                        name: "Tanzania, United Republic of",
                                                        code: "TZ",
                                                    },
                                                    {
                                                        name: "Thailand",
                                                        code: "TH",
                                                    },
                                                    {
                                                        name: "Timor-Leste",
                                                        code: "TL",
                                                    },
                                                    {
                                                        name: "Togo",
                                                        code: "TG",
                                                    },
                                                    {
                                                        name: "Tokelau",
                                                        code: "TK",
                                                    },
                                                    {
                                                        name: "Tonga",
                                                        code: "TO",
                                                    },
                                                    {
                                                        name: "Trinidad and Tobago",
                                                        code: "TT",
                                                    },
                                                    {
                                                        name: "Tunisia",
                                                        code: "TN",
                                                    },
                                                    {
                                                        name: "Turkey",
                                                        code: "TR",
                                                    },
                                                    {
                                                        name: "Turkmenistan",
                                                        code: "TM",
                                                    },
                                                    {
                                                        name: "Turks and Caicos Islands",
                                                        code: "TC",
                                                    },
                                                    {
                                                        name: "Tuvalu",
                                                        code: "TV",
                                                    },
                                                    {
                                                        name: "Uganda",
                                                        code: "UG",
                                                    },
                                                    {
                                                        name: "Ukraine",
                                                        code: "UA",
                                                    },
                                                    {
                                                        name: "United Arab Emirates",
                                                        code: "AE",
                                                    },
                                                    {
                                                        name: "United Kingdom",
                                                        code: "GB",
                                                    },
                                                    { name: "USA", code: "US" },
                                                    {
                                                        name: "United States Minor Outlying Islands",
                                                        code: "UM",
                                                    },
                                                    {
                                                        name: "Uruguay",
                                                        code: "UY",
                                                    },
                                                    {
                                                        name: "Uzbekistan",
                                                        code: "UZ",
                                                    },
                                                    {
                                                        name: "Vanuatu",
                                                        code: "VU",
                                                    },
                                                    {
                                                        name: "Venezuela",
                                                        code: "VE",
                                                    },
                                                    {
                                                        name: "Viet Nam",
                                                        code: "VN",
                                                    },
                                                    {
                                                        name: "Virgin Islands, British",
                                                        code: "VG",
                                                    },
                                                    {
                                                        name: "Virgin Islands, U.S.",
                                                        code: "VI",
                                                    },
                                                    {
                                                        name: "Wallis and Futuna",
                                                        code: "WF",
                                                    },
                                                    {
                                                        name: "Western Sahara",
                                                        code: "EH",
                                                    },
                                                    {
                                                        name: "Yemen",
                                                        code: "YE",
                                                    },
                                                    {
                                                        name: "Zambia",
                                                        code: "ZM",
                                                    },
                                                    {
                                                        name: "Zimbabwe",
                                                        code: "ZW",
                                                    },
                                                ].map((country) => (
                                                    <option
                                                        key={country.code}
                                                        value={country.name}
                                                    >
                                                        {country.name}
                                                    </option>
                                                ))}
                                                {/* <option value="Pakistan">
                                                            Pakistan
                                                        </option>
                                                        <option value="USA">
                                                            USA
                                                        </option>
                                                        <option value="India">
                                                            India
                                                        </option> */}
                                            </select>
                                        </div>
                                    </div>
                                </>
                            )}
                        </div>

                        <div>
                            <div className="row g-4">
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Name *
                                    </label>
                                    <input
                                        type="text"
                                        name="name"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[6].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="Name *"
                                        value={formData.data[6].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[6].index
                                            )
                                        }
                                    />
                                </div>
                                {isOrganization && (
                                    <div className="col-lg-4">
                                        <label
                                            htmlFor=""
                                            className="fw-semibold font-xxl-22px mb-2 d-block"
                                        >
                                            Position *
                                        </label>
                                        <input
                                            type="text"
                                            name="position"
                                            className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                                formData.data[7].error
                                                    ? "border border-danger"
                                                    : ""
                                            }`}
                                            style={{
                                                background: "#F5F5F5",
                                            }}
                                            placeholder="Position *"
                                            value={formData.data[7].answer}
                                            onChange={(e) =>
                                                handleChange(
                                                    e,
                                                    formData.data[7].index
                                                )
                                            }
                                        />
                                    </div>
                                )}
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Address *
                                    </label>
                                    <input
                                        type="text"
                                        name="address"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[8].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="Address *"
                                        value={formData.data[8].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[8].index
                                            )
                                        }
                                    />
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Country Of CitizenShip *
                                    </label>
                                    <select
                                        name="country"
                                        className={`form-control rounded-3 bg-white ${
                                            formData.data[9].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        defaultValue={formData.data[9].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[9].index
                                            )
                                        }
                                    >
                                        <option value="0" disabled>
                                            Select Country
                                        </option>
                                        {[
                                            { name: "Afghanistan", code: "AF" },
                                            {
                                                name: "Åland Islands",
                                                code: "AX",
                                            },
                                            { name: "Albania", code: "AL" },
                                            { name: "Algeria", code: "DZ" },
                                            {
                                                name: "American Samoa",
                                                code: "AS",
                                            },
                                            { name: "Andorra", code: "AD" },
                                            { name: "Angola", code: "AO" },
                                            { name: "Anguilla", code: "AI" },
                                            { name: "Antarctica", code: "AQ" },
                                            {
                                                name: "Antigua and Barbuda",
                                                code: "AG",
                                            },
                                            { name: "Argentina", code: "AR" },
                                            { name: "Armenia", code: "AM" },
                                            { name: "Aruba", code: "AW" },
                                            { name: "Australia", code: "AU" },
                                            { name: "Austria", code: "AT" },
                                            { name: "Azerbaijan", code: "AZ" },
                                            { name: "Bahamas", code: "BS" },
                                            { name: "Bahrain", code: "BH" },
                                            { name: "Bangladesh", code: "BD" },
                                            { name: "Barbados", code: "BB" },
                                            { name: "Belarus", code: "BY" },
                                            { name: "Belgium", code: "BE" },
                                            { name: "Belize", code: "BZ" },
                                            { name: "Benin", code: "BJ" },
                                            { name: "Bermuda", code: "BM" },
                                            { name: "Bhutan", code: "BT" },
                                            { name: "Bolivia", code: "BO" },
                                            {
                                                name: "Bosnia and Herzegovina",
                                                code: "BA",
                                            },
                                            { name: "Botswana", code: "BW" },
                                            {
                                                name: "Bouvet Island",
                                                code: "BV",
                                            },
                                            { name: "Brazil", code: "BR" },
                                            {
                                                name: "British Indian Ocean Territory",
                                                code: "IO",
                                            },
                                            {
                                                name: "Brunei Darussalam",
                                                code: "BN",
                                            },
                                            { name: "Bulgaria", code: "BG" },
                                            {
                                                name: "Burkina Faso",
                                                code: "BF",
                                            },
                                            { name: "Burundi", code: "BI" },
                                            { name: "Cambodia", code: "KH" },
                                            { name: "Cameroon", code: "CM" },
                                            { name: "Canada", code: "CA" },
                                            { name: "Cape Verde", code: "CV" },
                                            {
                                                name: "Cayman Islands",
                                                code: "KY",
                                            },
                                            {
                                                name: "Central African Republic",
                                                code: "CF",
                                            },
                                            { name: "Chad", code: "TD" },
                                            { name: "Chile", code: "CL" },
                                            { name: "China", code: "CN" },
                                            {
                                                name: "Christmas Island",
                                                code: "CX",
                                            },
                                            {
                                                name: "Cocos (Keeling) Islands",
                                                code: "CC",
                                            },
                                            { name: "Colombia", code: "CO" },
                                            { name: "Comoros", code: "KM" },
                                            { name: "Congo", code: "CG" },
                                            {
                                                name: "Congo, The Democratic Republic of the",
                                                code: "CD",
                                            },
                                            {
                                                name: "Cook Islands",
                                                code: "CK",
                                            },
                                            { name: "Costa Rica", code: "CR" },
                                            {
                                                name: "Cote D'Ivoire",
                                                code: "CI",
                                            },
                                            { name: "Croatia", code: "HR" },
                                            { name: "Cuba", code: "CU" },
                                            { name: "Cyprus", code: "CY" },
                                            {
                                                name: "Czech Republic",
                                                code: "CZ",
                                            },
                                            { name: "Denmark", code: "DK" },
                                            { name: "Djibouti", code: "DJ" },
                                            { name: "Dominica", code: "DM" },
                                            {
                                                name: "Dominican Republic",
                                                code: "DO",
                                            },
                                            { name: "Ecuador", code: "EC" },
                                            { name: "Egypt", code: "EG" },
                                            { name: "El Salvador", code: "SV" },
                                            {
                                                name: "Equatorial Guinea",
                                                code: "GQ",
                                            },
                                            { name: "Eritrea", code: "ER" },
                                            { name: "Estonia", code: "EE" },
                                            { name: "Ethiopia", code: "ET" },
                                            {
                                                name: "Falkland Islands (Malvinas)",
                                                code: "FK",
                                            },
                                            {
                                                name: "Faroe Islands",
                                                code: "FO",
                                            },
                                            { name: "Fiji", code: "FJ" },
                                            { name: "Finland", code: "FI" },
                                            { name: "France", code: "FR" },
                                            {
                                                name: "French Guiana",
                                                code: "GF",
                                            },
                                            {
                                                name: "French Polynesia",
                                                code: "PF",
                                            },
                                            {
                                                name: "French Southern Territories",
                                                code: "TF",
                                            },
                                            { name: "Gabon", code: "GA" },
                                            { name: "Gambia", code: "GM" },
                                            { name: "Georgia", code: "GE" },
                                            { name: "Germany", code: "DE" },
                                            { name: "Ghana", code: "GH" },
                                            { name: "Gibraltar", code: "GI" },
                                            { name: "Greece", code: "GR" },
                                            { name: "Greenland", code: "GL" },
                                            { name: "Grenada", code: "GD" },
                                            { name: "Guadeloupe", code: "GP" },
                                            { name: "Guam", code: "GU" },
                                            { name: "Guatemala", code: "GT" },
                                            { name: "Guernsey", code: "GG" },
                                            { name: "Guinea", code: "GN" },
                                            {
                                                name: "Guinea-Bissau",
                                                code: "GW",
                                            },
                                            { name: "Guyana", code: "GY" },
                                            { name: "Haiti", code: "HT" },
                                            {
                                                name: "Heard Island and Mcdonald Islands",
                                                code: "HM",
                                            },
                                            {
                                                name: "Holy See (Vatican City State)",
                                                code: "VA",
                                            },
                                            { name: "Honduras", code: "HN" },
                                            { name: "Hong Kong", code: "HK" },
                                            { name: "Hungary", code: "HU" },
                                            { name: "Iceland", code: "IS" },
                                            { name: "India", code: "IN" },
                                            { name: "Indonesia", code: "ID" },
                                            {
                                                name: "Iran, Islamic Republic Of",
                                                code: "IR",
                                            },
                                            { name: "Iraq", code: "IQ" },
                                            { name: "Ireland", code: "IE" },
                                            { name: "Isle of Man", code: "IM" },
                                            { name: "Israel", code: "IL" },
                                            { name: "Italy", code: "IT" },
                                            { name: "Jamaica", code: "JM" },
                                            { name: "Japan", code: "JP" },
                                            { name: "Jersey", code: "JE" },
                                            { name: "Jordan", code: "JO" },
                                            { name: "Kazakhstan", code: "KZ" },
                                            { name: "Kenya", code: "KE" },
                                            { name: "Kiribati", code: "KI" },
                                            {
                                                name: "Korea, Democratic People'S Republic of",
                                                code: "KP",
                                            },
                                            {
                                                name: "Korea, Republic of",
                                                code: "KR",
                                            },
                                            { name: "Kuwait", code: "KW" },
                                            { name: "Kyrgyzstan", code: "KG" },
                                            {
                                                name: "Lao People'S Democratic Republic",
                                                code: "LA",
                                            },
                                            { name: "Latvia", code: "LV" },
                                            { name: "Lebanon", code: "LB" },
                                            { name: "Lesotho", code: "LS" },
                                            { name: "Liberia", code: "LR" },
                                            {
                                                name: "Libyan Arab Jamahiriya",
                                                code: "LY",
                                            },
                                            {
                                                name: "Liechtenstein",
                                                code: "LI",
                                            },
                                            { name: "Lithuania", code: "LT" },
                                            { name: "Luxembourg", code: "LU" },
                                            { name: "Macao", code: "MO" },
                                            {
                                                name: "Macedonia, The Former Yugoslav Republic of",
                                                code: "MK",
                                            },
                                            { name: "Madagascar", code: "MG" },
                                            { name: "Malawi", code: "MW" },
                                            { name: "Malaysia", code: "MY" },
                                            { name: "Maldives", code: "MV" },
                                            { name: "Mali", code: "ML" },
                                            { name: "Malta", code: "MT" },
                                            {
                                                name: "Marshall Islands",
                                                code: "MH",
                                            },
                                            { name: "Martinique", code: "MQ" },
                                            { name: "Mauritania", code: "MR" },
                                            { name: "Mauritius", code: "MU" },
                                            { name: "Mayotte", code: "YT" },
                                            { name: "Mexico", code: "MX" },
                                            {
                                                name: "Micronesia, Federated States of",
                                                code: "FM",
                                            },
                                            {
                                                name: "Moldova, Republic of",
                                                code: "MD",
                                            },
                                            { name: "Monaco", code: "MC" },
                                            { name: "Mongolia", code: "MN" },
                                            { name: "Montserrat", code: "MS" },
                                            { name: "Morocco", code: "MA" },
                                            { name: "Mozambique", code: "MZ" },
                                            { name: "Myanmar", code: "MM" },
                                            { name: "Namibia", code: "NA" },
                                            { name: "Nauru", code: "NR" },
                                            { name: "Nepal", code: "NP" },
                                            { name: "Netherlands", code: "NL" },
                                            {
                                                name: "Netherlands Antilles",
                                                code: "AN",
                                            },
                                            {
                                                name: "New Caledonia",
                                                code: "NC",
                                            },
                                            { name: "New Zealand", code: "NZ" },
                                            { name: "Nicaragua", code: "NI" },
                                            { name: "Niger", code: "NE" },
                                            { name: "Nigeria", code: "NG" },
                                            { name: "Niue", code: "NU" },
                                            {
                                                name: "Norfolk Island",
                                                code: "NF",
                                            },
                                            {
                                                name: "Northern Mariana Islands",
                                                code: "MP",
                                            },
                                            { name: "Norway", code: "NO" },
                                            { name: "Oman", code: "OM" },
                                            { name: "Pakistan", code: "PK" },
                                            { name: "Palau", code: "PW" },
                                            {
                                                name: "Palestinian Territory, Occupied",
                                                code: "PS",
                                            },
                                            { name: "Panama", code: "PA" },
                                            {
                                                name: "Papua New Guinea",
                                                code: "PG",
                                            },
                                            { name: "Paraguay", code: "PY" },
                                            { name: "Peru", code: "PE" },
                                            { name: "Philippines", code: "PH" },
                                            { name: "Pitcairn", code: "PN" },
                                            { name: "Poland", code: "PL" },
                                            { name: "Portugal", code: "PT" },
                                            { name: "Puerto Rico", code: "PR" },
                                            { name: "Qatar", code: "QA" },
                                            { name: "Reunion", code: "RE" },
                                            { name: "Romania", code: "RO" },
                                            {
                                                name: "Russian Federation",
                                                code: "RU",
                                            },
                                            { name: "RWANDA", code: "RW" },
                                            {
                                                name: "Saint Helena",
                                                code: "SH",
                                            },
                                            {
                                                name: "Saint Kitts and Nevis",
                                                code: "KN",
                                            },
                                            { name: "Saint Lucia", code: "LC" },
                                            {
                                                name: "Saint Pierre and Miquelon",
                                                code: "PM",
                                            },
                                            {
                                                name: "Saint Vincent and the Grenadines",
                                                code: "VC",
                                            },
                                            { name: "Samoa", code: "WS" },
                                            { name: "San Marino", code: "SM" },
                                            {
                                                name: "Sao Tome and Principe",
                                                code: "ST",
                                            },
                                            {
                                                name: "Saudi Arabia",
                                                code: "SA",
                                            },
                                            { name: "Senegal", code: "SN" },
                                            {
                                                name: "Serbia and Montenegro",
                                                code: "CS",
                                            },
                                            { name: "Seychelles", code: "SC" },
                                            {
                                                name: "Sierra Leone",
                                                code: "SL",
                                            },
                                            { name: "Singapore", code: "SG" },
                                            { name: "Slovakia", code: "SK" },
                                            { name: "Slovenia", code: "SI" },
                                            {
                                                name: "Solomon Islands",
                                                code: "SB",
                                            },
                                            { name: "Somalia", code: "SO" },
                                            {
                                                name: "South Africa",
                                                code: "ZA",
                                            },
                                            {
                                                name: "South Georgia and the South Sandwich Islands",
                                                code: "GS",
                                            },
                                            { name: "Spain", code: "ES" },
                                            { name: "Sri Lanka", code: "LK" },
                                            { name: "Sudan", code: "SD" },
                                            { name: "Suriname", code: "SR" },
                                            {
                                                name: "Svalbard and Jan Mayen",
                                                code: "SJ",
                                            },
                                            { name: "Swaziland", code: "SZ" },
                                            { name: "Sweden", code: "SE" },
                                            { name: "Switzerland", code: "CH" },
                                            {
                                                name: "Syrian Arab Republic",
                                                code: "SY",
                                            },
                                            {
                                                name: "Taiwan, Province of China",
                                                code: "TW",
                                            },
                                            { name: "Tajikistan", code: "TJ" },
                                            {
                                                name: "Tanzania, United Republic of",
                                                code: "TZ",
                                            },
                                            { name: "Thailand", code: "TH" },
                                            { name: "Timor-Leste", code: "TL" },
                                            { name: "Togo", code: "TG" },
                                            { name: "Tokelau", code: "TK" },
                                            { name: "Tonga", code: "TO" },
                                            {
                                                name: "Trinidad and Tobago",
                                                code: "TT",
                                            },
                                            { name: "Tunisia", code: "TN" },
                                            { name: "Turkey", code: "TR" },
                                            {
                                                name: "Turkmenistan",
                                                code: "TM",
                                            },
                                            {
                                                name: "Turks and Caicos Islands",
                                                code: "TC",
                                            },
                                            { name: "Tuvalu", code: "TV" },
                                            { name: "Uganda", code: "UG" },
                                            { name: "Ukraine", code: "UA" },
                                            {
                                                name: "United Arab Emirates",
                                                code: "AE",
                                            },
                                            {
                                                name: "United Kingdom",
                                                code: "GB",
                                            },
                                            { name: "USA", code: "US" },
                                            {
                                                name: "United States Minor Outlying Islands",
                                                code: "UM",
                                            },
                                            { name: "Uruguay", code: "UY" },
                                            { name: "Uzbekistan", code: "UZ" },
                                            { name: "Vanuatu", code: "VU" },
                                            { name: "Venezuela", code: "VE" },
                                            { name: "Viet Nam", code: "VN" },
                                            {
                                                name: "Virgin Islands, British",
                                                code: "VG",
                                            },
                                            {
                                                name: "Virgin Islands, U.S.",
                                                code: "VI",
                                            },
                                            {
                                                name: "Wallis and Futuna",
                                                code: "WF",
                                            },
                                            {
                                                name: "Western Sahara",
                                                code: "EH",
                                            },
                                            { name: "Yemen", code: "YE" },
                                            { name: "Zambia", code: "ZM" },
                                            { name: "Zimbabwe", code: "ZW" },
                                        ].map((country) => (
                                            <option
                                                key={country.code}
                                                value={country.name}
                                            >
                                                {country.name}
                                            </option>
                                        ))}
                                    </select>
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        State *
                                    </label>
                                    <input
                                        type="text"
                                        name="state"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[10].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="State*"
                                        value={formData.data[10].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[10].index
                                            )
                                        }
                                    />
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        City *
                                    </label>
                                    <input
                                        type="text"
                                        name="city"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[11].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="City*"
                                        value={formData.data[11].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[11].index
                                            )
                                        }
                                    />
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Zip/Postal Code *
                                    </label>
                                    <input
                                        type="text"
                                        name="zip"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[12].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="Zip/Postal Code*"
                                        value={formData.data[12].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[12].index
                                            )
                                        }
                                    />
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Phone *
                                    </label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[13].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="Phone*"
                                        value={formData.data[13].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[13].index
                                            )
                                        }
                                    />
                                </div>
                                <div className="col-lg-4">
                                    <label
                                        htmlFor=""
                                        className="fw-semibold font-xxl-22px mb-2 d-block"
                                    >
                                        Email *
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        className={`form-control w-100 rounded-3 bg-white ps-4 ${
                                            formData.data[14].error
                                                ? "border border-danger"
                                                : ""
                                        }`}
                                        style={{
                                            background: "#F5F5F5",
                                        }}
                                        placeholder="Email*"
                                        value={formData.data[14].answer}
                                        onChange={(e) =>
                                            handleChange(
                                                e,
                                                formData.data[14].index
                                            )
                                        }
                                    />
                                </div>
                            </div>
                        </div>

                        <div className=" mt-5">
                            <table
                                className="table align-middle m-0"
                                style={{ "--cstm-table-bg": "white" }}
                            >
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th className="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {owners.map((owner, index) => (
                                        <tr key={index}>
                                            <td>{owner.name}</td>
                                            <td>{owner.email}</td>
                                            <td>{owner.phone}</td>
                                            <td>{owner.country}</td>
                                            <td className="text-center">
                                                <button
                                                    onClick={() =>
                                                        handleDeleteOwner(index)
                                                    }
                                                    className="rounded-2 p-2 d-inline-flex align-items-center justify-content-center hover_opacity-08"
                                                    style={{
                                                        background: "#FFEBEB",
                                                        border: "none",
                                                        cursor: "pointer",
                                                    }}
                                                >
                                                    <img
                                                        src="/assets-updated/img/icons/trash.svg"
                                                        alt="trash"
                                                    />
                                                </button>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>

                        <div className="d-flex gap-3 flex-wrap">
                            <button
                                type="button"
                                className="btn btn-outline-dark mt-3"
                                onClick={handleSubmit}
                                // onClick={handleAddOwner}
                            >
                                Add More Owners
                            </button>
                            <button
                                type="button"
                                className="btn btn-outline-dark mt-3"
                                onClick={handleSubmit}
                                // onClick={handleAddOwner}
                            >
                                Save Information
                            </button>
                        </div>
                        <ul className="mt-5 text-end">
                            <li>
                                <button
                                    type="button"
                                    onClick={(e) =>
                                        (window.location.href = `/sequence/step4?id=${lead_id}`)
                                    }
                                    // style={owners.length === 0 ? { display: "none" } : { display: "block" }}
                                    className={`btn btn-primary py-3 px-4 fw-semibold font-md-17px text-white lh-base d-inline-flex align-items-center gap-4 text-nowrap justify-content-between text-uppercase ${
                                        owners.length === 0
                                            ? "d-none"
                                            : "d-inline-flex"
                                    }`}
                                >
                                    Continue To The Next Step
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
        </SequenceLayout>
    );
};

export default Step3;
