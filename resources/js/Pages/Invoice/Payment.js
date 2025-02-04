import React, { useEffect, useState } from "react";
import { usePaymentInputs } from "react-payment-inputs";
import images from "react-payment-inputs/images";
import axios from "../../axios";
import toast, { Toaster } from "react-hot-toast";
import { ApiRequest } from "../../apiRequest";
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
    useEffect(() => {
        const fetchData = async () => {
            try {
                if (!invoice_id) {
                    console.error("Invoice ID not found in URL.");
                    return;
                }

                const response = await axios.get(
                    `api/invoice/${invoice_id}`, // Insert invoice_id into the URL
                    {
                        headers: {
                            Authorization: `Bearer puKaEJlva9adZeFPtUlKW17sODtHON2dWUMsFdX2`,
                            // "Content-Type": "application/json",
                        },
                    }
                );

                if (response) {
                    // console.log(response.data.invoice);
                    setapiData(response.data.invoice);
                    console.log(response.data.invoice);
                    console.log("iz");
                }
            } catch (error) {
                console.error("Error fetching data:", error);
            }
        };

        fetchData();

        return () => {
            // cleanup code if necessary
        };
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
        // if (!expDateValidate(formValues.expiryDate)) {
        //     errors.expirationDate = true;
        // }

        // Validate CVV (3 to 4 digits)
        // if (
        //     !formValues.cvv ||
        //     formValues.cvv.length < 3 ||
        //     formValues.cvv.length > 4 ||
        //     !/^\d+$/.test(formValues.cvv)
        // ) {
        //     errors.cvv = true;
        // }
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
                            Authorization: `Bearer puKaEJlva9adZeFPtUlKW17sODtHON2dWUMsFdX2`,
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
            <div className="row mx-0 justify-content-center padding__top__iz padding__bottom__iz">
                <Toaster position="top-right" reverseOrder={false} />
                <div className="col-lg-6">
                    <div class="alert bg-info p-2 rounded-3 " role="alert">
                        <p className="mb-0 text-dark">
                            <span className="fw-bold"> Note: </span>
                            Please do not refresh or close this page while your
                            payment is processing. Doing so may result in double
                            charges or incomplete transactions. Additionally,
                            avoid clicking the payment button multiple times as
                            it may also cause duplicate charges. Your patience
                            is appreciated as we securely process your payment.
                            Thank you.
                        </p>
                    </div>
                    {apiData?.invoice_logo == "show_brand_logo" && (
                        <div className="bg-light d-flex justify-content-lg-start justify-content-center px-lg-4  mt-3 shadow py-5 rounded-3">
                            <img
                                className="img-fluid"
                                height="100"
                                src={apiData?.brand?.mail_details?.logo}
                            />
                        </div>
                    )}
                    {apiData?.invoice_logo == "new_brand_logo" && (
                        <div className="bg-light d-flex justify-content-lg-start justify-content-center px-lg-4  mt-3 shadow py-5 rounded-3">
                            <img
                                className="img-fluid"
                                height="100"
                                style={{ objectFit: "contain" }}
                                src={apiData.invoice_photo}
                            />
                        </div>
                    )}
                    <div className="bg-light   mt-3 shadow py-3 rounded-3">
                        <div className="bg__primary px-3 py-3 mx-2 rounded-3 ">
                            <h5 className="text-white mb-0">
                                Customer Details
                            </h5>
                        </div>
                        {/* Customer Details */}
                        <div className="mt-3">
                            <div className="row mx-0 px-3">
                                <div className="col-md-4 col-12">
                                    <p className="fw-bold mb-0">Name:</p>
                                </div>
                                <div className="col-md-8 col-12">
                                    <p
                                        className="fw-light mb-0"
                                        style={{ wordWrap: "break-word" }}
                                    >
                                        {apiData !== null
                                            ? apiData.lead.name
                                            : ""}
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div className="row mx-0 px-3">
                                <div className="col-md-4 col-12">
                                    <p className="fw-bold mb-0">Email:</p>
                                </div>
                                <div className="col-md-8 col-12">
                                    <p
                                        className="fw-light mb-0"
                                        style={{ wordWrap: "break-word" }}
                                    >
                                        {apiData !== null
                                            ? apiData.lead.email
                                            : ""}
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div className="row mx-0 px-3">
                                <div className="col-md-4 col-12">
                                    <p className="fw-bold mb-0">Contact:</p>
                                </div>
                                <div className="col-md-8 col-12">
                                    <p className="fw-light mb-0">
                                        {apiData !== null
                                            ? apiData.lead.phone
                                            : ""}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="bg-light   mt-3 shadow py-3 rounded-3">
                        <div className="bg__primary px-3 py-3 mx-2 rounded-3 d-flex flex-wrap justify-content-between align-items-center ">
                            <h5 className="text-white mb-0">Invoice Details</h5>
                            <h5 className="text-white mb-0">
                                #{apiData !== null ? apiData.invoice_no : ""}
                            </h5>
                        </div>
                        {/* Invoice Details */}
                        <div className="mt-3">
                            {apiData !== null ? (
                                apiData.invoice_items.map((item) => (
                                    <>
                                        <div
                                            className="row mx-0 px-3"
                                            key={item.id}
                                        >
                                            <div className="col-md-8 col-12">
                                                <p className="fw-bold mb-0">
                                                    {item.service}
                                                </p>{" "}
                                                {/* Service name */}
                                            </div>
                                            <div className="col-md-4 col-12">
                                                <p className="fw-light mb-0">
                                                    {
                                                        apiData.merchant
                                                            .currency_symbol
                                                    }
                                                    {item.price}
                                                </p>{" "}
                                                {/* Price */}
                                            </div>
                                        </div>

                                        <hr />
                                    </>
                                ))
                            ) : (
                                <>
                                    <div className="row mx-0 px-3" key={0}>
                                        <div className="col-md-8 col-12">
                                            <p className="fw-bold mb-0">
                                                service
                                            </p>{" "}
                                            {/* Service name */}
                                        </div>
                                        <div className="col-md-4 col-12">
                                            <p className="fw-light mb-0">$0</p>{" "}
                                            {/* Price */}
                                        </div>
                                    </div>

                                    <hr />
                                </>
                            )}

                            <div className="row mx-0 px-5">
                                <div className="col-md-8 col-12">
                                    <p className="fw-bold mb-0 text-dark">
                                        Total:
                                    </p>
                                </div>
                                <div className="col-md-4 col-12">
                                    <p className="fw-bold mb-0 text-dark">
                                        {apiData !== null
                                            ? apiData.merchant.currency_symbol
                                            : "$"}

                                        {apiData !== null
                                            ? apiData.invoice_items.reduce(
                                                  (acc, item) =>
                                                      acc +
                                                      parseFloat(item.price),
                                                  0
                                              )
                                            : 0}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* {console.log(apiData)
                    } */}
                    {apiData !== null &&
                    apiData?.transaction_status == "paid" ? (
                        <>
                            <div className="bg-light   mt-3 shadow py-3 rounded-3">
                                <div className="bg__primary px-3 py-3 mx-2 rounded-3 ">
                                    <h5 className="text-white mb-0">
                                        Transaction Details
                                    </h5>
                                </div>
                                {/* Customer Details */}
                                <div className="mt-3">
                                    <div className="row mx-0 px-3">
                                        <div className="col-md-4 col-12">
                                            <p className="fw-bold mb-0">
                                                Transaction ID :
                                            </p>
                                        </div>
                                        <div className="col-md-8 col-12">
                                            <p
                                                className="fw-light mb-0"
                                                style={{
                                                    wordWrap: "break-word",
                                                }}
                                            >
                                                {apiData !== null
                                                    ? apiData.transaction_id
                                                    : ""}
                                            </p>
                                        </div>
                                    </div>
                                    <hr />
                                    <div className="row mx-0 px-3">
                                        <div className="col-md-4 col-12">
                                            <p className="fw-bold mb-0">
                                                Transaction Status ID:
                                            </p>
                                        </div>
                                        <div className="col-md-8 col-12">
                                            <p
                                                className="fw-light mb-0"
                                                style={{
                                                    wordWrap: "break-word",
                                                }}
                                            >
                                                {apiData !== null
                                                    ? apiData.transaction_status
                                                    : ""}
                                            </p>
                                        </div>
                                    </div>
                                    <hr />
                                    <div className="row mx-0 px-3">
                                        <div className="col-md-4 col-12">
                                            <p className="fw-bold mb-0">
                                                Paid at:
                                            </p>
                                        </div>
                                        <div className="col-md-8 col-12">
                                            <p className="fw-light mb-0">
                                                {apiData !== null
                                                    ? apiData.paid_at
                                                    : ""}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </>
                    ) : (
                        <div className="bg-light   mt-3 shadow py-3 rounded-3">
                            <div className="bg__primary px-3 py-3 mx-2 rounded-3 ">
                                <h5 className="text-white mb-0">
                                    Payment Details
                                </h5>
                            </div>
                            {/* Payment Details */}
                            <form onSubmit={handleSubmit}>
                                <div className="mt-3">
                                    <p className="mb-2 text-uppercase text-dark px-3 py-4">
                                        {" "}
                                        Pay with Card:
                                    </p>
                                    <div className="row mx-0 px-3">
                                        <div className="col-lg-6 col-12">
                                            <label htmlFor="" className="mb-2">
                                                Card Number
                                            </label>
                                            <div
                                                style={{ height: "60px" }}
                                                className={`form-control d-flex gap-2 align-items-center ${
                                                    formErrors.cardNumber &&
                                                    formErrors.cardNumber
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                            >
                                                <svg
                                                    {...getCardImageProps({
                                                        images,
                                                    })}
                                                />
                                                <input
                                                    type="text"
                                                    style={{
                                                        border: "0px",
                                                        padding: "0px",
                                                        backgroundColor:
                                                            "transparent",
                                                        height: "20px",
                                                    }}
                                                    {...getCardNumberProps({
                                                        onChange: (e) =>
                                                            handleInputChange(
                                                                e
                                                            ),
                                                    })}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-lg-6 col-12 mt-lg-0 mt-3">
                                            <label htmlFor="" className="mb-2">
                                                Valid Thru
                                            </label>
                                            <input
                                                type="text"
                                                className={`form-control ${
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
                                    </div>

                                    <div className="row mx-0 px-3 mt-3">
                                        <div className="col-lg-6 col-12">
                                            <label htmlFor="" className="mb-2">
                                                CVV
                                            </label>
                                            <input
                                                type="text"
                                                className={`form-control ${
                                                    formErrors.cvv &&
                                                    formErrors.cvc
                                                        ? "border-1 border-danger"
                                                        : ""
                                                }`}
                                                {...getCVCProps({
                                                    onChange: (e) =>
                                                        handleInputChange(e),
                                                })}
                                            />
                                        </div>

                                        <div className="col-lg-6 col-12 mt-lg-0 mt-3">
                                            <label htmlFor="" className="mb-2">
                                                Zip Code
                                            </label>
                                            <input
                                                type="text"
                                                name="zipCode"
                                                value={formValues.zipCode}
                                                onChange={handleInputChange}
                                                maxLength={5}
                                                pattern="[0-9]*"
                                                inputMode="numeric"
                                                className={`form-control ${
                                                    formErrors.zipCode
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="eg. 12345"
                                            />
                                        </div>
                                    </div>

                                    <div className="row mx-0 px-3 mt-3">
                                        <div className="col-lg-6 col-12">
                                            <label htmlFor="" className="mb-2">
                                                Name on Card
                                            </label>
                                            <input
                                                type="text"
                                                name="cardHolderName"
                                                value={
                                                    formValues.cardHolderName
                                                }
                                                onChange={handleInputChange}
                                                className={`form-control ${
                                                    formErrors.cardHolderName
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="eg. Baron Smith"
                                            />
                                        </div>
                                        <div className="col-lg-6 col-12 mt-lg-0 mt-3">
                                            <label htmlFor="" className="mb-2">
                                                Card Holder Address
                                            </label>
                                            <input
                                                type="text"
                                                name="address"
                                                value={formValues.address}
                                                onChange={handleInputChange}
                                                className={`form-control ${
                                                    formErrors.address
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="House xyz, Street xyz ..."
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div className="mx-3">
                                    <button
                                        className="btn btn-primary bg__primary mt-3 text-white  text-uppercase w-100 py-3"
                                        disabled={isSubmitting}
                                        type="submit"
                                    >
                                        {" "}
                                        submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
};

export default Payment;
