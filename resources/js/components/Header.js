import React from "react";

const Header = () => {
    return (
        <>
            <div className=" container py-3">
                <a className="navbar-brand">
                    <img
                        loading="lazy"
                        src="/assets/images/site-logo.webp" // Correct path for public assets
                        alt="logo"
                        width="150"
                        height="78"
                        className=" object-fit-contain h-auto"
                        style={{
                            width: "clamp(150px, 12vw, 300px)",
                        }}
                    />
                </a>
            </div>
        </>
    );
};

export default Header;
