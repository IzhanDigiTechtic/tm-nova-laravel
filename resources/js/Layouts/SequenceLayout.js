import React from "react";
import { Footer, Header } from "../components/AllComponents";
import LiveChat from "../components/LiveChat";
import { Helmet, HelmetProvider } from "react-helmet-async";
export default function SequenceLayout({ children, title }) {
    return (
        <>
            <HelmetProvider>
                <Helmet>
                    <title>Sequence Steps | Trademark Savior</title>
                </Helmet>
                <Header />
                <main>{children}</main>
                <LiveChat />
                <Footer />
            </HelmetProvider>
        </>
    );
}
