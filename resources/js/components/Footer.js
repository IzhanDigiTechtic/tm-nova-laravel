import React from "react";
import { Helmet } from "react-helmet";

const Footer = () => {
    const curentdate = new Date().getFullYear();
    return (
        <>
            <footer
                class="py-2 py-lg-4"
                style={{ background: "rgb(34, 54, 69)" }}
            >
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <p class=" text-white m-0 font-xxs-15px">
                                Copyright © 2023-{curentdate} Trademark Nova.
                                All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <ul class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-end flex-wrap">
                                <li>
                                    <a
                                        href="/privacy-policy"
                                        class="text-white font-xxs-15px link-primary"
                                    >
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="text-white font-24px">|</li>
                                <li>
                                    <a
                                        href="/terms-and-conditions"
                                        class="text-white font-xxs-15px link-primary"
                                    >
                                        Terms and Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </>
    );
};

export default Footer;
