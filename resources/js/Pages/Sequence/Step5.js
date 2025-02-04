import React, { useState } from "react";
import SequenceLayout from "../../Layouts/SequenceLayout";
import { Sidebar, SidebarCard } from "../../components/AllComponents";
import toast, { Toaster } from "react-hot-toast";
import { ApiRequest } from "../../apiRequest";
import { JsonPackages } from "../../jsonData/JsonPackages";
import axios from "../../axios";
import { Helmet } from "react-helmet-async";

const Step5 = () => {
    const [selectedPackage, setSelectedPackage] = useState(null);
    const [selectedPackagePrice, setSelectedPackagePrice] = useState(null);
    const [selectedBrand, setSelectedBrand] = useState(false);
    const [termsAccepted, setTermsAccepted] = useState(false);
    const [errors, setErrors] = useState({ package: "", terms: "" });
    const [timesService, settimesService] = useState(1);
    const retrievedStep1Data2 = JSON.parse(localStorage.getItem("step1.2"));

    const quantityData = retrievedStep1Data2.data.find(
        (item) => item.lead_key === "Quantity"
    );
    const quantityValue = quantityData ? quantityData.lead_value : 1;
    const [isSubmitClicked, setIsSubmitClicked] = useState(false);
    const [isLoading, setIsLoading] = useState(false); // For loading state
    const retrievedData = JSON.parse(localStorage.getItem("leadData"));
    const retrievedStep1Data = JSON.parse(localStorage.getItem("step1"));
    const retrievedStep4Data = JSON.parse(localStorage.getItem("step4"));
    const retrievedStep4Dataprice = JSON.parse(
        localStorage.getItem("step4")
    ).find((item) => item.lead_key === "Total Price");
    const totalPriceValue = retrievedStep4Dataprice
        ? retrievedStep4Dataprice.lead_value
        : 1;
    const [isChecked, setIsChecked] = useState(false);
    const retrievedStep5 = JSON.parse(localStorage.getItem("step5"));
    const [rushFill, setrushFill] = useState(false);
    const url = window.location.href;
    const urlObj = new URL(url);
    const params = new URLSearchParams(urlObj.search);
    const lead_id = params.get("id");
    const handlePackageSelect = (pkgName, pkgPrice) => {
        setSelectedPackage(pkgName);
        setSelectedPackagePrice(pkgPrice);
        toast.success("Package Added");
        setErrors({ ...errors, package: "" }); // Clear package error
    };
    const handleBrandChange = (event) => {
        setSelectedBrand(!selectedBrand);
        console.log("brand", selectedBrand);
    };
    const handleTermsChange = (event) => {
        setTermsAccepted(event.target.checked);
        setErrors({ ...errors, terms: "" }); // Clear terms error
    };

    const rushFillChange = (pkgname) => {
        if (selectedPackage == null) {
            setIsChecked(false); // Uncheck the checkbox
            toast.error("Select A Package First");
        } else if (selectedPackage === pkgname) {
            setIsChecked(true); // Check the checkbox
            // toast.success("Rush Fill Added");
        } else {
            toast.error("Select A Package First");
            setSelectedPackage(null);
            setSelectedPackagePrice(null);
            setIsChecked(false); // Uncheck if another package is selected
        }
    };
    const handleSubmit = async (event) => {
        event.preventDefault();
        setIsSubmitClicked(true);

        let validationErrors = { package: "" };

        // Validate selected package
        if (!selectedPackage) {
            validationErrors.package = "Please select a service package.";
        }

        // Set errors and prevent submission if there are any validation errors
        if (validationErrors.package) {
            setErrors(validationErrors);
            return;
        }

        // Create leadData object
        const leadData = {
            question: "Add To Cart",
            answer: JSON.stringify(
                Object.fromEntries(
                    Object.entries({
                        Package_name: selectedPackage,
                        Package_Price: selectedPackagePrice * quantityValue,
                        Amazon_Brand: selectedBrand
                            ? "Amazon Brand Registry"
                            : undefined,
                        rush_filled: isChecked ? "Rush fill" : undefined,
                        rush_fill_price: isChecked
                            ? 69 * quantityValue
                            : undefined, // Only include if rush fill is checked
                        Amazon_Price: selectedBrand ? 399 : 399,
                        Total_Price:
                            selectedPackagePrice * quantityValue +
                            (selectedBrand ? 399 : 0) +
                            retrievedStep4Data[0].lead_value * quantityValue +
                            (isChecked ? 69 * quantityValue : 0), // Ensure rush fill price is calculated only if checked
                    }).filter(([_, value]) => value !== undefined) // Filter out undefined values
                )
            ),
            lead_step: "5",
            lead_type: "text",
            // Add more fields as necessary
        };

        // If the answer is empty, you may want to handle that case
        if (leadData.answer === "{}") {
            delete leadData.answer; // Optionally remove the answer field if empty
        }

        try {
            setIsLoading(true); // Set loading state to true
            const response = await axios.post(
                ApiRequest.leadData, // Replace with your actual API URL
                {
                    lead_id: lead_id,
                    data: [leadData],
                },
                {
                    headers: {
                        Authorization: `puKaEJlva9adZeFPtUlKW17sODtHON2dWUMsFdX2`,
                        // "Content-Type": "application/json",
                    },
                }
            );

            // Handle the successful response
            toast.success("Form submitted successfully");
            localStorage.setItem("step5", JSON.stringify(response.data.data));
            console.log("Form submitted successfully:", response.data);

            window.location.href = `/sequence/step6?id=${lead_id}`;
            // window.location.href = `/thank-you?id=${lead_id}`
            // You can redirect to the next step or show a success message here
        } catch (error) {
            // Handle errors (e.g., network errors, server errors)
            console.error("Error submitting lead data:", error);
            // alert("There was an error submitting the lead. Please try again.");
            toast.error(
                "There was an error submitting the form. Please try again."
            );
        } finally {
            setIsLoading(false); // Reset loading state
        }
    };
    const [progressnumber, setProgressnumber] = useState({
        percent: "71%",
        topBarName: "Filing Packages",
    });
    return (
        <>
            <SequenceLayout>
                <Helmet>
                    <title>Step 05 | Trademark Savior</title>
                </Helmet>
                <section>
                    <div className="container">
                        <Toaster position="top-right" reverseOrder={false} />
                        <Sidebar progressnumber={progressnumber} />

                        <div className="row g-3">
                            <div className="col-lg-9">
                                <h2 className=" fw-semibold font-xxs-25px font-md-40px mb-4 mb-lg-10">
                                    <span className=" text-primary">
                                        Filing
                                    </span>{" "}
                                    Packages
                                </h2>
                                <form
                                    className=" overflow-hidden"
                                    onSubmit={handleSubmit}
                                >
                                    <div className="border-1 border-bottom mb-5 pb-4">
                                        <h1 className="fw-semibold font-xxs-20px font-md-25px d-block text-primary">
                                            Dear{" "}
                                            {retrievedStep1Data.name ? (
                                                retrievedStep1Data?.name
                                            ) : (
                                                <>Client Name</>
                                            )}
                                        </h1>
                                        <p className="font-xxs-15px m-0">
                                            Thank you for selecting a Search
                                            Package, please select the below
                                            given Filing Package that suits your
                                            requirements and recommended add-on
                                            identified by our system to move
                                            ahead with the process.
                                        </p>
                                    </div>
                                    <div className="row g-13 g-md-4">
                                        {JsonPackages.map((pkg) => (
                                            <div
                                                className={`col-md-6 col-xl-4 col-xxxl-4`}
                                                key={pkg.name}
                                            >
                                                <div
                                                    className={`bg-white rounded-20px border border-1 position-relative  ${
                                                        isSubmitClicked &&
                                                        !selectedPackage &&
                                                        "border border-danger"
                                                    }`}
                                                >
                                                    {pkg.bedge && (
                                                        <div
                                                            className={`price-bedge position-absolute start-50 translate-middle-x ${pkg.bedge}`}
                                                            style={{
                                                                top: "-20px",
                                                                backgroundColor:
                                                                    pkg.bedge ===
                                                                    "Recommended"
                                                                        ? "#917204"
                                                                        : "red",
                                                            }}
                                                        >
                                                            {pkg.bedge}
                                                        </div>
                                                    )}

                                                    <div className="border-1 border-bottom">
                                                        <span
                                                            className="font-xxs-20px font-md-35px d-block fw-semibold text-center p-4 bg-light lh-1"
                                                            style={{
                                                                borderTopLeftRadius:
                                                                    "20px",
                                                                borderTopRightRadius:
                                                                    "20px",
                                                            }}
                                                        >
                                                            {pkg.name}
                                                        </span>
                                                        <div className="d-block fw-semibold text-center p-3 border-1 border-top">
                                                            <span
                                                                className="lh-1"
                                                                style={{
                                                                    fontSize:
                                                                        "clamp(30px, 5vw, 55px)",
                                                                }}
                                                            >
                                                                ${pkg.price}
                                                            </span>
                                                            <p className="font-xxs-15px m-0">
                                                                {
                                                                    pkg.description
                                                                }
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        className="p-3 bg-light"
                                                        style={{
                                                            borderBottomLeftRadius:
                                                                "20px",
                                                            borderBottomRightRadius:
                                                                "20px",
                                                        }}
                                                    >
                                                        <span
                                                            className=" d-block text-center font-xxs-14px"
                                                            dangerouslySetInnerHTML={{
                                                                __html: pkg.beforeContent,
                                                            }}
                                                        />

                                                        <ul className="overflow-hidden overflow-y-auto d-flex flex-column gap-2 ps-4 mt-2">
                                                            {pkg.features.map(
                                                                (feature) => (
                                                                    <li
                                                                        key={
                                                                            feature
                                                                        }
                                                                        className="d-flex align-items-baseline gap-2 fw-semibold lh-base font-xxs-15px"
                                                                    >
                                                                        <img
                                                                            src="/sequence-assets/img/check.svg"
                                                                            className="static-color object-fit-contain"
                                                                            alt="check icon"
                                                                            width="15"
                                                                            height="15"
                                                                        />
                                                                        {
                                                                            feature
                                                                        }
                                                                    </li>
                                                                )
                                                            )}
                                                        </ul>
                                                        {pkg.rushFiling &&
                                                            pkg.rushFiling
                                                                .enabled && (
                                                                <div className="form-check d-flex align-items-center p-0 gap-2 mt-9">
                                                                    <input
                                                                        className="form-check-input m-0 p-0"
                                                                        type="checkbox"
                                                                        onChange={() => {
                                                                            rushFillChange(
                                                                                pkg.name
                                                                            );
                                                                        }}
                                                                        checked={
                                                                            isChecked &&
                                                                            pkg.name ==
                                                                                selectedPackage
                                                                        }
                                                                        id={`RushFiling${pkg.name}`}
                                                                        style={{
                                                                            width: "22px",
                                                                            height: "22px",
                                                                        }}
                                                                    />
                                                                    <label
                                                                        className="form-check-label font-xxs-15px"
                                                                        htmlFor={`RushFiling${pkg.name}`}
                                                                        role="button"
                                                                    >
                                                                        24 Hours
                                                                        Rush
                                                                        Filing -{" "}
                                                                        <span className="fw-bold">
                                                                            $
                                                                            {
                                                                                pkg
                                                                                    .rushFiling
                                                                                    .price
                                                                            }
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            )}

                                                        <ul className=" mt-5">
                                                            <li className="flex-grow-1">
                                                                <button
                                                                    type="button"
                                                                    className="btn btn-primary py-3 px-4 fw-semibold font-md-17px text-white lh-base d-inline-flex align-items-center gap-4 text-nowrap justify-content-center text-uppercase w-100"
                                                                    onClick={() =>
                                                                        handlePackageSelect(
                                                                            pkg.name,
                                                                            pkg.price
                                                                        )
                                                                    }
                                                                >
                                                                    Add To Cart
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                    {/* Amazon Brand Registry Section */}
                                    <div className="border-1 border-top pt-5 mt-13">
                                        <div className="form-check p-0 d-flex gap-2 align-items-baseline mb-3">
                                            <input
                                                className="form-check-input m-0"
                                                type="checkbox"
                                                id="Amazon"
                                                name="brandRegistry"
                                                onChange={handleBrandChange}
                                                style={{
                                                    width: "22px",
                                                    height: "22px",
                                                    "--cstm-border-width":
                                                        "2px",
                                                }}
                                            />
                                            <label
                                                className="form-check-label font-xxs-23px fw-semibold "
                                                htmlFor="Amazon"
                                                role="button"
                                            >
                                                <span className=" mb-n1">
                                                    Amazon Brand Registry $399
                                                </span>
                                            </label>
                                        </div>
                                        <p>
                                            To showcase your ecommerce business
                                            and sell your brand on Amazon, it’s
                                            a{" "}
                                            <span
                                                className=" fw-bold"
                                                style={{ color: "#efb402" }}
                                            >
                                                MANDATORY
                                            </span>{" "}
                                            requirement to get your brand
                                            registered. Amazon Brand Registry is
                                            a protection offered by Trademark
                                            Royal to assist Amazon sellers
                                            register their brand and to remove
                                            listings that infringe on their
                                            trademark rights. If any other
                                            seller is using your trademark logo
                                            or name to sell goods or is copying
                                            your listings, Trademark Savior will
                                            have them banned.
                                        </p>
                                        {/* <span className="fw-semibold font-xxs-20px font-md-25px d-block">
                                            Dear{" "}
                                            {retrievedStep1Data.name ? (
                                                retrievedStep1Data?.name
                                            ) : (
                                                <>Client Name</>
                                            )}
                                        </span>
                                        <p className="font-xxs-14px mb-4">
                                            Terms And Conditions Agreement: Your
                                            Gateway To Seamless Interaction.
                                        </p>
                                        <div
                                            className="bg-white rounded-20px border p-4 overflow-hidden overflow-y-auto"
                                            style={{ height: "300px" }}
                                        >
                                            Trademark Novelty
                                        </div> */}

                                        <div className=" text-end">
                                            <button
                                                type="submit"
                                                className="btn btn-primary py-3 px-4 fw-semibold font-md-17px text-white lh-base d-inline-flex align-items-center gap-4 text-nowrap justify-content-between text-uppercase mt-4"
                                                disabled={isLoading}
                                            >
                                                {isLoading
                                                    ? "Submitting..."
                                                    : "Proceed To Checkout"}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div className="col-lg-3">
                                <SidebarCard
                                    title={retrievedStep4Data[0].lead_key}
                                    price={totalPriceValue}
                                    step={5}
                                    timesmultiplied={quantityValue}
                                    package2={{
                                        PackageName: selectedPackage,
                                        PackagePrice: selectedPackagePrice,
                                        AmazonBrand: selectedBrand,
                                        rushFilling: isChecked,
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

export default Step5;
