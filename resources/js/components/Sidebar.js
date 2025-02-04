import React from "react";
import "./sidebar.css";
const Sidebar = ({ progressnumber }) => {
    console.log(progressnumber);
    return (
        <>
            <div
                className="p-4 rounded-3 text-center mb-5 py-5"
                style={{ background: "#1f3645" }}
            >
                <h1 className="text-white fw-medium font-xxs-22px font-md-32px">
                    {progressnumber.topBarName}
                </h1>
                {progressnumber.topBarDescription && (
                    <p className=" text-white mb-3 mb-lg-5">
                        {progressnumber.topBarDescription}
                    </p>
                )}
                <div class="progress">
                    <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        style={{ width: `${progressnumber.percent}` }}
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    >
                        {progressnumber.percent}
                    </div>
                </div>
            </div>
            {/* <div className="row">
                <div className="col-md-12">
                    <div className="stepStatus">
                        <ul>
                            <li className={activeStep >= 1 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 01</b>
                                    Trademark <br />
                                    Information
                                </span>
                            </li>
                            <li className={activeStep >= 2 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 02</b>
                                    Goods/services <br />
                                    Information
                                </span>
                            </li>
                            <li className={activeStep >= 3 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 03</b>
                                    Owner <br />
                                    Information
                                </span>
                            </li>
                            <li className={activeStep >= 4 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 04</b>
                                    Search <br />
                                    Packages
                                </span>
                            </li>
                            <li className={activeStep >= 5 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 05</b>
                                    Filing <br />
                                    Packages
                                </span>
                            </li>
                            <li className={activeStep >= 6 ? "active" : ""}>
                                <span>
                                    <b className="d-lg-none d-block">Step 06</b>
                                    Payment <br />
                                    Information
                                </span>
                            </li>
                        </ul>
                        <ul className="bars d-lg-none d-flex">
                            <li className={activeStep >= 1 ? "active" : ""} />
                            <li className={activeStep >= 2 ? "active" : ""} />
                            <li className={activeStep >= 3 ? "active" : ""} />
                            <li className={activeStep >= 4 ? "active" : ""} />
                            <li className={activeStep >= 5 ? "active" : ""} />
                            <li className={activeStep >= 6 ? "active" : ""} />
                        </ul>
                    </div>
                </div>
            </div> */}
        </>
    );
};

export default Sidebar;
