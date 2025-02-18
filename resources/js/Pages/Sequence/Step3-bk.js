import React, { useState, useContext, useEffect } from "react";

import { Sidebar } from "../../components/AllComponents";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Themecontext, ThemeProvider } from "../../ThemeContext";
import { ApiRequest } from "../../apiRequest";
import axios from "../../axios";
import { fromJSON } from "postcss";
import toast, { Toaster } from "react-hot-toast";
const Step3 = () => {
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
                lead_step: 2,
                error: false,
                index: "1",
                required: false,
            },

            {
                question: "Organization Name",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "2",
                required: false,
            },
            {
                question: "Organization Type",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "3",
                required: false,
            },
            {
                question: "Country Of Foundation",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "4",
                required: false,
            },
            {
                question: "State Of Foundation",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "5",
                required: false,
            },
            {
                question: "Name",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "6",
                required: true,
            },
            {
                question: "Position",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "7",
                required: false,
            },
            {
                question: "Address",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "8",
                required: true,
            },
            {
                question: "Country of Citizenship",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "9",
                required: true,
            },
            {
                question: "State",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "10",
                required: true,
            },
            {
                question: "City",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "11",
                required: true,
            },
            {
                question: "ZipCode",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "12",
                required: true,
            },
            {
                question: "Phone",
                answer: "",
                lead_type: "text",
                lead_step: 2,
                error: false,
                index: "13",
                required: true,
            },
            {
                question: "Email",
                answer: "",
                lead_type: "text",
                lead_step: 2,
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

        // questionIndex == 0 ? setIsOrganization(value === "Organization") : '';

        if (questionIndex == 0) {
            setIsOrganization(value === "Organization");

            setFormData((prevState) => ({
                ...prevState,
                data: prevState.data.map((item) =>
                    ["1", "2", "3", "4", "5", "7"].includes(item.index)
                        ? { ...item, required: isOrganization }
                        : item
                ),
            }));
        }

        if (questionIndex == 1) {
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
            return {
                ...item,
                error: !item.answer, // Set error to true if the answer is empty
            };
        });

        setFormData((prev) => ({
            ...prev,
            data: updatedData,
        }));

        // Return true if all answers are filled, false otherwise
        return updatedData.every((item) => !item.error);
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
            const filteredAnswers = formData.data.filter(
                (item) => item.answer != ""
            );

            const isValid = validateForm(formData.data);

            if (!isValid) {
                // Handle invalid form (e.g., show an alert or display error messages)
                toast.error("Please submit all the required fields");
                return;
            }
            return;
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
                    handleAddOwner();
                }
                // window.location.href = `/sequence/step4?id=${lead_id}`;
            }
        } catch (error) {
            console.error("Error:", error);
            // alert("Error submitting the form");
            toast.error("Error Submitting the form");
        }
    };

    return (
        <SequenceLayout>
            <section>
                <div className="container">
                    <Toaster position="top-right" reverseOrder={false} />
                    <div className="row g-3">
                        <Sidebar />
                        <div className="col-lg-10">
                            <form onSubmit={handleSubmit}>
                                <div className="border-1 border-bottom mb-4">
                                    <h1 className="fw-semibold font-xxs-20px font-md-25px d-block">
                                        Dear Client Name
                                    </h1>
                                    <p>
                                        Answer Below Mentioned Questions To Help
                                        Us Draft Your Paperwork For The
                                        Trademark Registration Process Smoothly.
                                    </p>
                                </div>

                                <div className="d-flex flex-column gap-4 border-1 border-bottom mb-4 pb-4">
                                    <div>
                                        <p className="fw-semibold font-xxl-20px mb-0 d-block">
                                            Will The Trademark Be Owned By An
                                            Individual Or An Entity Such As A
                                            Corporation Or LLC? *
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
                                                        formData.data[0]
                                                            .answer ==
                                                        "Individual"
                                                    }
                                                    required={
                                                        formData.data[0]
                                                            .required
                                                    }
                                                    onChange={(e) =>
                                                        handleOwnershipChange(
                                                            e.target.value,
                                                            formData.data[0]
                                                                .index
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
                                                        formData.data[0]
                                                            .answer ==
                                                        "Organization"
                                                    }
                                                    required={
                                                        formData.data[0]
                                                            .required
                                                    }
                                                    onChange={(e) =>
                                                        handleOwnershipChange(
                                                            e.target.value,
                                                            formData.data[0]
                                                                .index
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
                                                                formData.data[1]
                                                                    .error
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
                                                            onChange={(e) =>
                                                                handleOwnershipChange(
                                                                    e.target
                                                                        .value,
                                                                    formData
                                                                        .data[1]
                                                                        .index
                                                                )
                                                            }
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
                                                                formData.data[2]
                                                                    .error
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
                                                            onChange={(e) =>
                                                                handleOwnershipChange(
                                                                    e.target
                                                                        .value,
                                                                    formData
                                                                        .data[1]
                                                                        .index
                                                                )
                                                            }
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

                                            <div className="row g-2">
                                                <div className="col-md-6 col-lg-4">
                                                    <input
                                                        type="text"
                                                        name="organizationName"
                                                        className={`form-control p-3 rounded-4 ${
                                                            formData.data[2]
                                                                .error
                                                                ? "border border-danger"
                                                                : ""
                                                        }`}
                                                        required={
                                                            formData.data[2]
                                                                .required
                                                        }
                                                        placeholder="Organization Name *"
                                                        onChange={(e) =>
                                                            handleChange(
                                                                e,
                                                                formData.data[2]
                                                                    .index
                                                            )
                                                        }
                                                    />
                                                </div>
                                                <div className="col-md-6 col-lg-4">
                                                    <select
                                                        name="organizationType"
                                                        className={`form-control p-3 rounded-4 ${
                                                            formData.data[3]
                                                                .error
                                                                ? "border border-danger"
                                                                : ""
                                                        }`}
                                                        required={
                                                            formData.data[3]
                                                                .required
                                                        }
                                                        onChange={(e) =>
                                                            handleChange(
                                                                e,
                                                                formData.data[3]
                                                                    .index
                                                            )
                                                        }
                                                    >
                                                        <option
                                                            value="0"
                                                            disabled
                                                        >
                                                            Select Organization
                                                            Type
                                                        </option>
                                                        <option value="Corporation">
                                                            Corporation
                                                        </option>
                                                        <option value="LLC">
                                                            Limited Liability
                                                            Company (LLC)
                                                        </option>
                                                        <option value="Partnership">
                                                            Partnership
                                                        </option>
                                                        <option value="Non-Profit Corporation">
                                                            Non-Profit
                                                            Corporation
                                                        </option>
                                                        <option value="Non-Profit Organization">
                                                            Non-Profit
                                                            Organization
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
                                                    <select
                                                        name="Stateoffoundation"
                                                        className={`form-control p-3 rounded-4 ${
                                                            formData.data[5]
                                                                .error
                                                                ? "border border-danger"
                                                                : ""
                                                        }`}
                                                        defaultValue={
                                                            formData.data[5]
                                                                .answer
                                                        }
                                                        required={
                                                            formData.data[5]
                                                                .required
                                                        }
                                                        onChange={(e) =>
                                                            handleChange(
                                                                e,
                                                                formData.data[5]
                                                                    .index
                                                            )
                                                        }
                                                    >
                                                        <option
                                                            value="0"
                                                            disabled
                                                        >
                                                            Select State
                                                        </option>
                                                        <option value="New York">
                                                            New York
                                                        </option>
                                                        <option value="Texas">
                                                            Texas
                                                        </option>
                                                        <option value="California">
                                                            California
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
                                                    <select
                                                        name="country of foundation"
                                                        className={`form-control p-3 rounded-4 ${
                                                            formData.data[4]
                                                                .error
                                                                ? "border border-danger"
                                                                : ""
                                                        }`}
                                                        defaultValue={
                                                            formData.data[4]
                                                                .answer
                                                        }
                                                        required={
                                                            formData.data[4]
                                                                .required
                                                        }
                                                        onChange={(e) =>
                                                            handleChange(
                                                                e,
                                                                formData.data[4]
                                                                    .index
                                                            )
                                                        }
                                                    >
                                                        <option
                                                            value="0"
                                                            disabled
                                                        >
                                                            Select Country
                                                        </option>
                                                        <option value="Pakistan">
                                                            Pakistan
                                                        </option>
                                                        <option value="USA">
                                                            USA
                                                        </option>
                                                        <option value="India">
                                                            India
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </>
                                    )}
                                </div>

                                <div className="p-3 rounded-4 bg-white mt-5">
                                    <div className="row g-2">
                                        <div className="col-lg-4">
                                            <input
                                                type="text"
                                                name="name"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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
                                                <input
                                                    type="text"
                                                    name="position"
                                                    className={`form-control w-100 rounded-4 ps-4 ${
                                                        formData.data[7].error
                                                            ? "border border-danger"
                                                            : ""
                                                    }`}
                                                    style={{
                                                        background: "#F5F5F5",
                                                    }}
                                                    placeholder="Position *"
                                                    value={
                                                        formData.data[7].answer
                                                    }
                                                    onChange={(e) =>
                                                        handleChange(
                                                            e,
                                                            formData.data[7]
                                                                .index
                                                        )
                                                    }
                                                />
                                            </div>
                                        )}
                                        <div className="col-lg-4">
                                            <input
                                                type="text"
                                                name="address"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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
                                            <select
                                                name="country"
                                                className={`form-control p-3 rounded-4 ${
                                                    formData.data[9].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                style={{
                                                    background: "#F5F5F5",
                                                }}
                                                defaultValue={
                                                    formData.data[9].answer
                                                }
                                                onChange={(e) =>
                                                    handleChange(
                                                        e,
                                                        formData.data[9].index
                                                    )
                                                }
                                            >
                                                <option value="">
                                                    Select Country
                                                </option>
                                                <option value="Pakistan">
                                                    Pakistan
                                                </option>
                                                <option value="USA">USA</option>
                                                <option value="India">
                                                    India
                                                </option>
                                            </select>
                                        </div>
                                        <div className="col-lg-4">
                                            <input
                                                type="text"
                                                name="state"
                                                className={`form-control w-100 rounded-4 ps-4 ${
                                                    formData.data[10].error
                                                        ? "border border-danger"
                                                        : ""
                                                }`}
                                                style={{
                                                    background: "#F5F5F5",
                                                }}
                                                placeholder="State*"
                                                value={formData.state}
                                                onChange={(e) =>
                                                    handleChange(
                                                        e,
                                                        formData.data[10].index
                                                    )
                                                }
                                            />
                                        </div>
                                        <div className="col-lg-4">
                                            <input
                                                type="text"
                                                name="city"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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
                                            <input
                                                type="text"
                                                name="zip"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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
                                            <input
                                                type="tel"
                                                name="phone"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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
                                            <input
                                                type="email"
                                                name="email"
                                                className={`form-control w-100 rounded-4 ps-4 ${
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

                                <div className="p-3 rounded-4 bg-white mt-5">
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
                                                <th className="text-center">
                                                    Action
                                                </th>
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
                                                                handleDeleteOwner(
                                                                    index
                                                                )
                                                            }
                                                            className="rounded-2 p-2 d-inline-flex align-items-center justify-content-center hover_opacity-08"
                                                            style={{
                                                                background:
                                                                    "#FFEBEB",
                                                                border: "none",
                                                                cursor: "pointer",
                                                            }}
                                                        >
                                                            <img
                                                                src="assets-updated/img/icons/trash.svg"
                                                                alt="trash"
                                                            />
                                                        </button>
                                                    </td>
                                                </tr>
                                            ))}
                                        </tbody>
                                    </table>
                                </div>

                                <button
                                    type="button"
                                    className="btn btn-outline-dark mt-3"
                                    onClick={handleSubmit}
                                >
                                    Add More Owners
                                </button>

                                <ul className="mt-5 text-end">
                                    <li>
                                        <button
                                            type="submit"
                                            className="btn btn-primary py-3 px-4 rounded-pill fw-semibold font-md-17px text-white lh-base transparent-primary-shadow d-inline-flex align-items-center gap-4 text-nowrap justify-content-between"
                                        >
                                            Continue To The Next Step
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </SequenceLayout>
    );
};

export default Step3;
