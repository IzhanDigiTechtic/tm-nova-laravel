import React, { useRef, useState } from "react";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Sidebar, SidebarCard } from "../../components/AllComponents";
import { useCreditCardValidator, images } from 'react-creditcard-validator';
const Step6 = () => {
    const [formValues, setFormValues] = useState({
        cardHolderName: "",
        cardNumber: undefined,
        // expirationDate: "",
        // cvv: "",
        address: "",
        zipCode: "",
    });
    const inputRef = useRef(null);
    const [formErrors, setFormErrors] = useState({});
    const [isSubmitting, setIsSubmitting] = useState(false);
    const retrievedStep4Data = JSON.parse(localStorage.getItem("step4"));
    const retrievedStep4Dataprice = JSON.parse(localStorage.getItem("step4")).find(item => item.lead_key === "Total Price");
    const totalPriceValue = retrievedStep4Dataprice ? retrievedStep4Dataprice.lead_value : 1;
    const retrievedStep1Data2 = JSON.parse(localStorage.getItem("step1.2"));
    const quantityData = retrievedStep1Data2.data.find(item => item.lead_key === "Quantity");
    const quantityValue = quantityData ? quantityData.lead_value : 1;
    const retrievedStep5Data = JSON.parse(localStorage.getItem("step5"));
    const jsonString = JSON.parse(retrievedStep5Data[0].lead_value);
    // console.log(jsonString.Package_name)
    const handleInputChange = (e) => {
        const { name, value } = e.target;
        console.log(value)
        setFormValues({ ...formValues, [name]: value });
        // console.log("hi")
        // console.log(`Input value: ${inputRef.current.value}`);
    };
    function expDateValidate(month, year) {
        if (Number(year) > 2035) {
          return 'Expiry Date Year cannot be greater than 2035';
        }
        if (Number(year) < 2024 && month < 10) {
          return 'Expiry Date Year cannot be greater than 2035';
        }
        return;
      }
      const {
        getCardNumberProps,
        getCardImageProps,
        getCVCProps,
        getExpiryDateProps,
        meta: { erroredInputs }
      } = useCreditCardValidator({ expiryDateValidator: expDateValidate });
    // const validateExpirationDate = (expirationDate) => {
    //     const [month, year] = expirationDate.split("/");

    //     if (!month || !year || month.length !== 2 || year.length !== 2) {
    //         return false;
    //     }

    //     const currentYear = new Date().getFullYear() % 100;
    //     const currentMonth = new Date().getMonth() + 1;

    //     if (Number(month) < 1 || Number(month) > 12) {
    //         return false;
    //     }

    //     if (
    //         Number(year) < currentYear ||
    //         (Number(year) === currentYear && Number(month) < currentMonth)
    //     ) {
    //         return false;
    //     }

    //     return true;
    // };
    const cardNumberProps = getCardNumberProps({
        onChange: (event) => {
          // Call both the card validator's onChange and your custom onChange
          handleInputChange(event);

        // const { name, value } = event.target;  
        //         console.log(value)
      }
      });
    const cvcProps = getCVCProps({
        onChange: (event) => {
          // Call both the card validator's onChange and your custom onChange
          handleInputChange(event);

        // const { name, value } = event.target;  
        //         console.log(value)
      }
      });
    const expiryProps = getExpiryDateProps({
        onChange: (event) => {
          // Call both the card validator's onChange and your custom onChange
          handleInputChange(event);

        // const { name, value } = event.target;  
        //         console.log(value)
      }
      });
    const validate = () => {
        let errors = {};

        // Validate Card Holder Name
        if (!formValues.cardHolderName.trim()) {
            errors.cardHolderName = true;
        }

        // Validate Card Number (16 digits)
        if (!formValues.cardNumber || formValues.cardNumber.replace(/\s/g, "").length !== 16) {
            errors.cardNumber = true;
        }
        console.log(formValues.cardNumber,formValues.cardNumber.replace(/\s/g, "").length)


        // Validate Expiration Date (MM/YY)
        if (!expDateValidate(formValues.expiryDate)) {
            errors.expirationDate = true;
        }

        // Validate CVV (3 to 4 digits)
        // if (
        //     !formValues.cvv ||
        //     formValues.cvv.length < 3 ||
        //     formValues.cvv.length > 4 ||
        //     !/^\d+$/.test(formValues.cvv)
        // ) {
        //     errors.cvv = true;
        // }

        // Validate Address
        if (!formValues.address.trim()) {
            errors.address = true;
        }

        // Validate Zip Code (5 digits)
        if (!formValues.zipCode || formValues.zipCode.length !== 5) {
            errors.zipCode = true;
        }
// console.log(errors)
        return errors;
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        const errors = validate();
        setFormErrors(errors);
        console.log(formErrors)
        setIsSubmitting(true);

        // If no errors, submit the form
        if (Object.keys(errors).length === 0) {
            console.log("Form submitted successfully", formValues);
        }
    };

    return (
        <>
            <SequenceLayout>
                <section>
                    <div className="container">
                        <div className="row g-3">
                            <Sidebar />
                            <div className="col-lg-7">
                                <div className="d-flex align-items-center justify-content-between mt-lg-14">
                                    <h1 className="font-xxs-22px font-md-25px font-xxl-30px fw-bold">
                                        Total Payable
                                    </h1>
                                    <span className="fw-bold font-xxs-40px font-md-50px fst-italic">
                                        ${jsonString.Total_Price}
                                    </span>
                                </div>
                                <form onSubmit={handleSubmit}>
                                    <div className="row g-3">
                                        <div className="col-12">
                                            <img
                                                src="/assets-updated/img/payment.png"
                                                alt="payment image"
                                                width="234"
                                                height="35"
                                                className="object-fit-contain ms-auto mb-3"
                                            />
                                            <input
                                                type="text"
                                                name="cardHolderName"
                                                value={
                                                    formValues.cardHolderName
                                                }
                                                onChange={handleInputChange}
                                                className={`form-control rounded-4 ps-4 font-xxxl-20px default-input ${
                                                    formErrors.cardHolderName
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="Card Holder Name"
                                            />
                                        </div>
                                        <div className="col-lg-6">
                                            <div    className={`form-control rounded-4 ps-4 font-xxxl-20px paymentcard-number py-0 d-flex gap-2 align-items-center ${
                                                     (erroredInputs.cardNumber && formErrors.cardNumber)
                                                        ? "border-danger"
                                                        : ""
                                                }`}>   
                                                 <svg {...getCardImageProps({ images })} />
                                            <input
                                                // type="number"
                                           
                                                // className={`form-control rounded-4 ps-4 font-xxxl-20px paymentcard-number ${
                                                //     formErrors.cardNumber
                                                //         ? "border-danger"
                                                //         : ""
                                                // }`}    
                                                  onChange={handleInputChange}
                                                  style={{border:"0px",padding:"0px"}}
                                                  ref={inputRef}
                                                  {...cardNumberProps}
                                                // name="cardNumber"
                                                // value={formValues.cardNumber}
                                          
                                                // placeholder="xxxxxxxxxxxxxx"
                                            />

                                            </div>
                                   
                                        </div>
                                        <div className="col-lg-6">
                                            <div className={`rounded-4 px-3 bg-white d-flex align-items-center justify-content-between ${
                                                        formErrors.expirationDate &&    formErrors.cvv
                                                            ? "border-1 border-danger"
                                                            : ""
                                                    }`}>
                                                <input
                                                    // type="text"
                                                    // name="expirationDate"
                                                    // value={
                                                    //     formValues.expirationDate
                                                    // }
                                                    // onChange={handleInputChange}
                                                    style={{ width: "100px" }}
                                                    // placeholder="MM/YY"
                                                    // {...getExpiryDateProps()} 
                                                    {...expiryProps}
                                                    className={`border-0 bg-transparent payment-expiration-date ${
                                                        formErrors.expirationDate
                                                            ? "border-1 border-danger"
                                                            : ""
                                                    }`}
                                                />
                                                <div
                                                    className="bg-dark opacity-25"
                                                    style={{
                                                        width: "1px",
                                                        height: "33px",
                                                    }}
                                                ></div>
                                                <input
                                                    // type="text"
                                                    // name="cvv"
                                                    // value={formValues.cvv}
                                                    // onChange={handleInputChange}
                                                    className={`border-0 bg-transparent payment-cvv-code ${
                                                        formErrors.cvv
                                                            ? "border-danger"
                                                            : ""
                                                    }`}
                                                    // style={{ width: "100px" }}
                                                    // placeholder="CVV"
                                                    // {...getCVCProps()}
                                                    {...cvcProps}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-lg-9">
                                            <input
                                                type="text"
                                                name="address"
                                                value={formValues.address}
                                                onChange={handleInputChange}
                                                className={`form-control rounded-4 ps-4 font-xxxl-20px default-input ${
                                                    formErrors.address
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="Address"
                                            />
                                        </div>
                                        <div className="col-lg-3">
                                            <input
                                                type="text"
                                                name="zipCode"
                                                value={formValues.zipCode}
                                                onChange={handleInputChange}
                                                className={`form-control rounded-4 ps-4 font-xxxl-20px default-input ${
                                                    formErrors.zipCode
                                                        ? "border-danger"
                                                        : ""
                                                }`}
                                                placeholder="Zip Code"
                                            />
                                        </div>
                                        <div className="col-12">
                                            <button
                                                type="submit"
                                                className="btn btn-dark ps-4 pe-1 py-2 text-center rounded-pill fw-semibold font-md-17px text-white lh-lg transparent-primary-shadow d-inline-flex align-items-center gap-4 text-nowrap w-100 justify-content-center mt-3 transparent-dark-shadow paymentFormValidation"
                                            >
                                                Continue To The Next Step
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div className="col-lg-3">
                                <SidebarCard            
                                   title={retrievedStep4Data[0].lead_key}
                                    price={totalPriceValue}
                                    timesmultiplied={quantityValue}
                                    step={6}
                                    package2={{
                                        PackageName: jsonString.Package_name,
                                        PackagePrice: jsonString.Package_Price,
                                        AmazonBrand: jsonString.Amazon_Brand  == "Amazon Brand Registry" ? true : false,
                                        rushFilling :  jsonString.rush_filled == "Rush fill" ? true : false,
                                    }} 
                                    />
                            </div>
                        </div>
                    </div>
                </section>
            </SequenceLayout>
        </>
    );
};

export default Step6;
