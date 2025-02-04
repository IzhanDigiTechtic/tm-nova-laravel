import React from "react";

const SidebarCard = (props) => {
    return (
        <>
            <div
                className="bg-white rounded-3 p-3 position-sticky mx-3"
                style={{ top: "20px" }}
            >
                <span className="fw-bold font-xxs-18px font-md-20px font-xxl-24px d-block lh-sm mb-2">
                    Your Order For Trademark Name
                </span>
                <span className="fw-semibold text-primary d-block">
                    Service Packages
                </span>
                <ul
                    className="mt-3 overflow-hidden overflow-y-auto spacing_not-last-child mb-4"
                    style={{ maxHeight: "150px" }}
                >
                    <li className="d-flex align-items-start gap-2">
                        <span
                            className="d-block lh-base font-xxs-15px"
                            style={{ maxWidth: "200px" }}
                        >
                            {props.title ? (
                                props.timesmultiplied + "X " + props.title
                            ) : (
                                <>Select Package</>
                            )}
                        </span>
                        <span className="ms-auto fw-semibold">
                            {props.price ? `$${props.price}` : <>$0</>}
                        </span>
                        {/* <a href="#" className="hover_opacity-07 flex-shrink-0">
                            <img
                                loading="lazy"
                                src="/assets-updated/img/icons/trash.svg"
                                alt="trash icon"
                                width="15"
                                height="15"
                            />
                        </a> */}
                    </li>
                    {props.package2 ? (
                        <li className="d-flex align-items-start gap-2">
                            <span
                                className="d-block lh-base font-xxs-15px"
                                style={{ maxWidth: "200px" }}
                            >
                                {props.package2.PackageName ? (
                                    props.timesmultiplied +
                                    "X " +
                                    props.package2.PackageName
                                ) : (
                                    <></>
                                )}
                            </span>
                            <span className="ms-auto fw-semibold">
                                {props.package2.PackagePrice ? (
                                    props.step == 6 ? (
                                        "$" + props.package2.PackagePrice
                                    ) : (
                                        "$" +
                                        props.package2.PackagePrice *
                                            props.timesmultiplied
                                    )
                                ) : (
                                    <></>
                                )}
                            </span>
                            {/* <a
                                href="#"
                                className="hover_opacity-07 flex-shrink-0"
                            >
                                <img
                                    loading="lazy"
                                    src="/assets-updated/img/icons/trash.svg"
                                    alt="trash icon"
                                    width="15"
                                    height="15"
                                />
                            </a> */}
                        </li>
                    ) : null}
                    {props.package2?.AmazonBrand ? (
                        <li className="d-flex align-items-start gap-2">
                            <span
                                className="d-block lh-base font-xxs-15px"
                                style={{ maxWidth: "200px" }}
                            >
                                {props.package2.AmazonBrand == true ? (
                                    //  " Amazon Brand Registry"
                                    "Amazon Brand Registry"
                                ) : (
                                    <></>
                                )}
                            </span>
                            <span className="ms-auto fw-semibold">
                                {props.package2.AmazonBrand ? (
                                    "$" + 399
                                ) : (
                                    <>$0</>
                                )}
                            </span>
                            {/* <a
                                href="#"
                                className="hover_opacity-07 flex-shrink-0"
                            >
                                <img
                                    loading="lazy"
                                    src="/assets-updated/img/icons/trash.svg"
                                    alt="trash icon"
                                    width="15"
                                    height="15"
                                />
                            </a> */}
                        </li>
                    ) : null}
                    {props.package2?.rushFilling ? (
                        <li className="d-flex align-items-start gap-2">
                            <span
                                className="d-block lh-base font-xxs-15px"
                                style={{ maxWidth: "200px" }}
                            >
                                {props.package2.rushFilling == true ? (
                                    //  " Amazon Brand Registry"
                                    props.timesmultiplied +
                                    "X " +
                                    "Rush Filling"
                                ) : (
                                    <></>
                                )}
                            </span>
                            <span className="ms-auto fw-semibold">
                                {props.package2.rushFilling == true ? (
                                    "$" + 69 * props.timesmultiplied
                                ) : (
                                    <>$0</>
                                )}
                            </span>
                            {/* <a
                                href="#"
                                className="hover_opacity-07 flex-shrink-0"
                            >
                                <img
                                    loading="lazy"
                                    src="/assets-updated/img/icons/trash.svg"
                                    alt="trash icon"
                                    width="15"
                                    height="15"
                                />
                            </a> */}
                        </li>
                    ) : null}
                </ul>
                <div className="d-flex justify-content-between align-items-center pulse-animation border-2 border-top pt-3 border-danger">
                    <span className="font-xxs-16px font-md-18px fw-bold lh-1">
                        Total
                    </span>
                    <span className="font-xxs-18px fw-medium lh-1">
                        {props.price &&
                        props.timesmultiplied &&
                        !props.package2 ? (
                            "$" + props.price * props.timesmultiplied
                        ) : !props.package2 ? (
                            <>$0</>
                        ) : (
                            <> </>
                        )}
                        {props.price &&
                        props.timesmultiplied &&
                        props.package2 &&
                        props.step == 5 ? (
                            `$${
                                props.price +
                                props.package2.PackagePrice *
                                    props.timesmultiplied +
                                (props.package2.AmazonBrand == true ? 399 : 0) +
                                (props.package2.rushFilling == true
                                    ? 69 * props.timesmultiplied
                                    : 0)
                            }`
                        ) : props.step === 4 || props.step === 6 ? (
                            <></>
                        ) : (
                            <>$0</>
                        )}
                        {props.price &&
                        props.timesmultiplied &&
                        props.package2 &&
                        props.step == 6 ? (
                            `$${
                                props.price +
                                props.package2.PackagePrice +
                                (props.package2.AmazonBrand == true ? 399 : 0) +
                                (props.package2.rushFilling == true
                                    ? 69 * props.timesmultiplied
                                    : 0)
                            }`
                        ) : props.step === 4 || props.step === 5 ? (
                            <></>
                        ) : (
                            <>$0</>
                        )}
                        {/* $0 */}
                    </span>
                </div>
            </div>
        </>
    );
};

export default SidebarCard;
