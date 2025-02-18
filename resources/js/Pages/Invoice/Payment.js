import React, { useEffect, useState } from "react";
import { usePaymentInputs } from "react-payment-inputs";
import images from "react-payment-inputs/images";
import toast, { Toaster } from "react-hot-toast";
import axios from "../../axios";
import "./invoice.css";

const Payment = () => {
    const [formValues, setFormValues] = useState({
        cardHolderName: "",
        cardNumber: undefined,
        // expirationDate: "",
        // cvv: "",
        address: "",
        city: "",
        state: "",
        zipCode: "",
    });
    const [formErrors, setFormErrors] = useState({});
    const [isSubmitting, setIsSubmitting] = useState(false);
    const [apiData, setapiData] = useState(null);
    const url = window.location.href;
    const urlObj = new URL(url);
    const params = new URLSearchParams(urlObj.search);
    const invoice_id = params.get("invoice");
    const fetchData = async () => {
        try {
            if (!invoice_id) {
                console.error("Invoice ID not found in URL.");
                return;
            }
            const { data } = await axios.get(`api/invoice/${invoice_id}`, {
                headers: {
                    Authorization: `uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB`,
                },
            });

            if (data) {
                setapiData(data?.invoice);
                // console.log(data?.invoice);
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    };
    useEffect(() => {
        fetchData();
    }, []);

    // console.log(invoice_id, "INVOICE ID");
    const handleInputChange = (e) => {
        const { name, value } = e.target;

        // Create a temporary form object to store new values
        let updatedValues = { ...formValues, [name]: value };

        if (name === "expiryDate") {
            const [month, year] = value.split("/").map((str) => str.trim());

            // Update the expiry month and year in one go along with the main form field
            updatedValues = {
                ...updatedValues,
                expiry__month: month,
                expiry__year: year,
            };
        }

        if (name === "cardNumber") {
            // Replace all spaces in the card number
            updatedValues = {
                ...updatedValues,
                [name]: value.replace(/\s/g, ""),
            };
        }

        // Finally, set all values in a single setState call
        setFormValues(updatedValues);
    };
    function expDateValidate(expDate) {
        const [month, year] = expDate.split("/").map((str) => str.trim()); // Split and remove spaces

        const currentDate = new Date();
        const currentYear = currentDate.getFullYear();
        const currentMonth = currentDate.getMonth() + 1; // Months are 0-indexed in JS, so we add 1.

        const expiryYear = Number(`20${year}`); // Assuming year format is YY, so prefix '20'
        const expiryMonth = Number(month);

        // Check if the year is greater than 2035
        if (expiryYear > 2035) {
            return "Expiry Date Year cannot be greater than 2035";
        }

        // Check if the card is already expired
        if (
            expiryYear < currentYear ||
            (expiryYear === currentYear && expiryMonth < currentMonth)
        ) {
            return "Card is expired";
        }

        // If no validation error, return null or undefined
        return;
    }
    const {
        getCardNumberProps,
        getExpiryDateProps,
        getCVCProps,
        wrapperProps,
        getCardImageProps,
    } = usePaymentInputs();
    const validate = () => {
        let errors = {};

        // Validate Card Holder Name
        if (!formValues.cardHolderName.trim()) {
            errors.cardHolderName = true;
            toast.error("Please enter Card Holder Name");
        }
        if (!formValues.address.trim()) {
            toast.error("Please enter Your Address");
            errors.address = true;
        }
        // if (!formValues.state.trim()) {
        //     toast.error("Please enter Your State");
        //     errors.state = true;
        // }
        // if (!formValues.city.trim()) {
        //     toast.error("Please enter Your City");
        //     errors.city = true;
        // }
        // Validate Card Number (16 digits)
        if (
            !formValues.cardNumber ||
            formValues.cardNumber.replace(/\s/g, "").length < 15 ||
            formValues.cardNumber.replace(/\s/g, "").length > 19
        ) {
            errors.cardNumber = true;
            toast.error("Please enter Card Number Correctly");
        }
        // console.log(formValues.cardNumber, formValues.cardNumber.replace(/\s/g, "").length)
        // console.log(formValues)
        const validationMessage = expDateValidate(formValues.expiryDate);

        // Validate Expiration Date (MM/YY)
        if (validationMessage) {
            errors.expiryDate = true;
            toast.error(validationMessage);
            // console.log(validationMessage); // Error message if invalid
        } else {
            console.log("Expiration date is valid");
        }

        if (!formValues.cvv && !formValues.cvc) {
            toast.error("Please enter Your CVC");
            errors.cvv = true;
        }
        // Validate Address

        // Validate Zip Code (5 digits)
        if (!formValues.zipCode || formValues.zipCode.length !== 5) {
            toast.error("Please enter Your Zipcode");
            errors.zipCode = true;
        }
        // console.log(errors)
        return errors;
    };
    const handleSubmit = async (e) => {
        e.preventDefault();
        const errors = validate();
        setFormErrors(errors);
        // console.log(formErrors)
        setIsSubmitting(true);
        // toast.error(
        //     "There was an error submitting the form. Please try again."
        // );
        // If no errors, submit the form
        // console.log(Object.keys(errors).length)
        if (Object.keys(errors).length === 0) {
            // console.log("Form submitted successfully", formValues);
            // toast.success("Form submitted successfully");
            try {
                const response = await axios.post(
                    `api/invoice/${invoice_id}`, // Replace with your actual API URL
                    {
                        card_num: formValues.cardNumber,
                        expiry:
                            formValues.expiry__month +
                            "/" +
                            formValues.expiry__year,
                        cvv: formValues.cvc || formValues.cvv,
                        address: formValues.address,
                        zip: formValues.zipCode,
                        name: formValues.cardHolderName,
                    },
                    {
                        headers: {
                            Authorization: `uaywhQLVdlwRmIFbg4ebOKSGu94WyJoCKRk09ZZB`,
                            // "Content-Type": "application/json",
                        },
                    }
                );

                // console.log(response);

                // Assuming a successful response has a status of "success" in its data
                if (response.data.status == "success") {
                    // console.log("Payment done successfully", formValues);
                    toast.success("Payment done successfully");
                    // window.location.href = `/thank-you`;
                    window.location.reload();
                    // setFormValues({
                    //     cardHolderName: "",
                    //     cardNumber: "",
                    //     address: "",
                    //     city: "",
                    //     state: "",
                    //     zipCode: "",
                    //     expiryDate: "",
                    //     expiry__month: "",
                    //     expiry__year: "",
                    //     cvc: ""
                    // })
                    setIsSubmitting(false);
                } else {
                    // console.log("Payment failed", formValues);
                    toast.error("Payment failed!");
                    setIsSubmitting(false);
                }
            } catch (error) {
                console.error("Error processing payment:", error);
                setIsSubmitting(false);
                // console.log("Payment failed", formValues);
                toast.error(
                    "An error occurred while processing the payment. Please try again."
                );
            }
        }
    };

    return (
        <>
            <Toaster position="top-right" reverseOrder={false} />
            <div
                className="mx-auto p-4 d-flex flex-column gap-4 placeholder-glow"
                style={{ maxWidth: 600 }}
            >
                <div
                    className="p-3 rounded-4 mb-0"
                    role="alert"
                    style={{ background: "#fff3cc" }}
                >
                    <p className="mb-0 text-dark fw-semibold font-xxs-15px">
                        <span className="fw-bold"> Note: </span>
                        Please do not refresh or close this page while your
                        payment is processing. Doing so may result in double
                        charges or incomplete transactions. Additionally, avoid
                        clicking the payment button multiple times as it may
                        also cause duplicate charges. Your patience is
                        appreciated as we securely process your payment. Thank
                        you.
                    </p>
                </div>

                <div className=" bg-white rounded-4 p-3 mx-n3 mb-n7">
                    <img
                        src="/assets/images/site-logo.webp"
                        alt="Logo"
                        width={200}
                        height={53}
                        className=" h-auto mb-3"
                        style={{ width: "clamp(150px, 12vw, 250px)" }}
                    />
                </div>

                <div className="bg-white rounded-4 shadow p-2 pb-3">
                    <div className="bg-primary p-3 rounded-3 mb-3 py-2 lh-lg">
                        <span className="text-white m-0 font-xxs-15px font-sm-16px font-md-20px fw-semibold">
                            Customer Details
                        </span>
                    </div>
                    {/* Customer Details */}

                    <ul className=" d-flex flex-column gap-2 border_not-last-child px-3 overflow-hidden overflow-x-auto">
                        <li className=" d-flex align-items-center gap-2 pb-2 ">
                            <span
                                className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                style={{ minWidth: "clamp(80px,8vw,112px)" }}
                            >
                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/266/266134.png"
                                    alt="use icon"
                                    width={18}
                                    height={18}
                                    className="object-fit-contain"
                                />{" "}
                                Name:
                            </span>
                            <span>
                                {apiData !== null ? (
                                    apiData.lead.name
                                ) : (
                                    <>
                                        <span
                                            className="placeholder"
                                            style={{ minWidth: 130 }}
                                        ></span>
                                    </>
                                )}
                            </span>
                        </li>
                        <li className=" d-flex align-items-center gap-2 pb-2">
                            <span
                                className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                style={{ minWidth: "clamp(80px,8vw,112px)" }}
                            >
                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/646/646094.png"
                                    alt="use icon"
                                    width={18}
                                    height={18}
                                    className="object-fit-contain"
                                />{" "}
                                Email:
                            </span>
                            <span>
                                {apiData !== null ? (
                                    apiData.lead.email
                                ) : (
                                    <>
                                        <span
                                            className="placeholder"
                                            style={{ minWidth: 170 }}
                                        ></span>
                                    </>
                                )}
                            </span>
                        </li>
                        <li className=" d-flex align-items-center gap-2 pb-2">
                            <span
                                className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                style={{ minWidth: "clamp(80px,8vw,112px)" }}
                            >
                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/126/126509.png"
                                    alt="use icon"
                                    width={18}
                                    height={18}
                                    className="object-fit-contain"
                                />{" "}
                                Contact:
                            </span>
                            <span>
                                {apiData !== null ? (
                                    apiData.lead.phone
                                ) : (
                                    <>
                                        <span
                                            className="placeholder"
                                            style={{ minWidth: 140 }}
                                        ></span>
                                    </>
                                )}
                            </span>
                        </li>
                    </ul>
                </div>

                <div className="bg-white rounded-4 shadow p-2 pb-3">
                    <div className="bg-primary p-3 gap-2 rounded-3 mb-3 py-2 lh-lg d-flex flex-wrap justify-content-between align-items-center ">
                        <span className="text-white m-0 font-xxs-15px font-sm-16px font-md-20px fw-semibold">
                            Invoice Details
                        </span>
                        <span className="text-white m-0 font-xxs-15px font-sm-16px font-md-20px fw-semibold">
                            #
                            {apiData !== null ? (
                                apiData?.invoice_no
                            ) : (
                                <>
                                    {" "}
                                    <span
                                        className="placeholder"
                                        style={{ minWidth: 170 }}
                                    ></span>
                                </>
                            )}
                        </span>
                    </div>
                    {/* Invoice Details */}
                    <ul className="d-flex flex-column gap-2 border_not-last-child px-3 overflow-hidden overflow-x-auto">
                        {apiData !== null ? (
                            apiData?.invoice_items.map((items, index) => (
                                <li
                                    className=" d-flex align-items-center justify-content-between gap-2 fw-semibold border-bottom border-1 pb-2"
                                    key={index}
                                >
                                    <span
                                        className="show-line-4"
                                        style={{ maxWidth: 335 }}
                                    >
                                        {items?.service}
                                    </span>
                                    <span className=" fw-normal">
                                        {apiData?.merchant?.currency_symbol}
                                        {items?.price}
                                    </span>
                                </li>
                            ))
                        ) : (
                            <>
                                <li className=" d-flex align-items-center justify-content-between gap-2 flex-wrap fw-semibold border-bottom border-1 pb-2">
                                    <span
                                        className="placeholder"
                                        style={{ width: 100 }}
                                    ></span>
                                    <span
                                        className=" fw-normal placeholder"
                                        style={{ width: 50 }}
                                    ></span>
                                </li>
                            </>
                        )}

                        <li className=" d-flex align-items-center justify-content-between gap-2 flex-wrap fw-semibold font-md-18px px-3">
                            Total{" "}
                            <span className=" fw-semibold">
                                {apiData !== null ? (
                                    `${apiData?.merchant?.currency_symbol}${apiData?.transaction_amount}`
                                ) : (
                                    <span
                                        className="placeholder"
                                        style={{ width: 50 }}
                                    ></span>
                                )}
                            </span>
                        </li>
                    </ul>
                </div>
                {/* {console.log(apiData)
                    } */}
                {apiData !== null && apiData?.transaction_status == "paid" ? (
                    <>
                        <div className="bg-white rounded-4 shadow p-2">
                            <div className="bg-primary p-3 rounded-3 mb-2">
                                <span className="text-white font-xxs-15px font-sm-16px font-md-20px fw-semibold">
                                    Transaction Details
                                </span>
                            </div>
                            {/* Customer Details */}

                            <ul className="d-flex flex-column gap-2 border_not-last-child px-3 overflow-hidden overflow-x-auto">
                                <li className=" d-flex align-items-center gap-2 pb-2 ">
                                    <span
                                        className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                        style={{
                                            minWidth:
                                                "clamp(80px, 10vw, 125px)",
                                            maxWidth: 120,
                                        }}
                                    >
                                        {" "}
                                        Transaction ID:
                                    </span>
                                    <span>obLyORbyDyLDnOWn</span>
                                </li>
                                <li className=" d-flex align-items-center gap-2 pb-2 ">
                                    <span
                                        className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                        style={{
                                            minWidth:
                                                "clamp(80px, 10vw, 125px)",
                                            maxWidth: 120,
                                        }}
                                    >
                                        {" "}
                                        Transaction Status ID:
                                    </span>
                                    <span
                                        className=" text-capitalize"
                                        style={{ color: "green" }}
                                    >
                                        paid
                                    </span>
                                </li>
                                <li className=" d-flex align-items-center gap-2 pb-2 ">
                                    <span
                                        className=" fw-semibold font-xxs-15px d-flex align-items-center gap-2"
                                        style={{
                                            minWidth:
                                                "clamp(80px, 10vw, 125px)",
                                            maxWidth: 120,
                                        }}
                                    >
                                        {" "}
                                        Paid at:
                                    </span>
                                    <span>2025-02-10 04:04:07</span>
                                </li>
                            </ul>
                        </div>
                    </>
                ) : (
                    <div className="bg-white rounded-4 shadow p-2 pb-3">
                        <div className="bg-primary p-3 rounded-3 mb-3 py-2 lh-lg">
                            <span className="text-white m-0 font-xxs-15px font-sm-16px font-md-20px fw-semibold">
                                Payment Details
                            </span>
                        </div>
                        {/* Payment Details */}
                        <form className="px-3" onSubmit={handleSubmit}>
                            <span className="mb-3 d-block text-uppercase text-dark fw-semibold">
                                {" "}
                                Pay with Card:
                            </span>
                            <div className="row g-2 g-md-3">
                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        Card Number
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <div className="position-relative">
                                        <svg
                                            className=" flex-shrink-0 position-absolute top-50 translate-middle-y start-0 ms-3"
                                            {...getCardImageProps({
                                                images,
                                            })}
                                        />
                                        <input
                                            className={`form-control ps-7 rounded-pill ${
                                                formErrors.cardNumber &&
                                                formErrors.cardNumber
                                                    ? "border-danger"
                                                    : ""
                                            }`}
                                            type="text"
                                            {...getCardNumberProps({
                                                onChange: (e) =>
                                                    handleInputChange(e),
                                            })}
                                        />
                                    </div>
                                </div>
                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        Valid Thru
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        className={`form-control rounded-pill ps-3 ps-md-4 ${
                                            formErrors.expiryDate
                                                ? "border-1 border-danger"
                                                : ""
                                        }`}
                                        {...getExpiryDateProps({
                                            onChange: (e) =>
                                                handleInputChange(e),
                                        })}
                                    />
                                </div>
                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        CVV
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        className={`form-control rounded-pill ps-3 ps-md-4 ${
                                            formErrors.cvv && formErrors.cvc
                                                ? "border-1 border-danger"
                                                : ""
                                        }`}
                                        {...getCVCProps({
                                            onChange: (e) =>
                                                handleInputChange(e),
                                        })}
                                    />
                                </div>

                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        Zip Code
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="zipCode"
                                        value={formValues.zipCode}
                                        onChange={handleInputChange}
                                        maxLength={5}
                                        pattern="[0-9]*"
                                        inputMode="numeric"
                                        className={`form-control rounded-pill ps-3 ps-md-4 ${
                                            formErrors.zipCode
                                                ? "border-danger"
                                                : ""
                                        }`}
                                        placeholder="eg. 12345"
                                    />
                                </div>

                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        Name on Card
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="cardHolderName"
                                        value={formValues.cardHolderName}
                                        onChange={handleInputChange}
                                        className={`form-control rounded-pill ps-3 ps-md-4 ${
                                            formErrors.cardHolderName
                                                ? "border-danger"
                                                : ""
                                        }`}
                                        placeholder="eg. Baron Smith"
                                    />
                                </div>
                                <div className="col-sm-6">
                                    <label className="mb-1 font-xxs-15px fw-medium">
                                        Card Holder Address
                                        <span className=" text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="address"
                                        value={formValues.address}
                                        onChange={handleInputChange}
                                        className={`form-control rounded-pill ps-3 ps-md-4 ${
                                            formErrors.address
                                                ? "border-danger"
                                                : ""
                                        }`}
                                        placeholder="House xyz, Street xyz ..."
                                    />
                                </div>
                            </div>

                            <button
                                className="btn btn-primary mt-3 mt-lg-5 text-white text-uppercase w-100 py-2 font-md-20px fw-semibold rounded-pill"
                                disabled={isSubmitting}
                                type="submit"
                            >
                                {" "}
                                submit
                            </button>
                        </form>
                    </div>
                )}
            </div>
        </>
    );
};

export default Payment;
