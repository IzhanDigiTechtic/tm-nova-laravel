import React from "react";
import { createInertiaApp } from "@inertiajs/react";
import { createRoot } from "react-dom/client";
import { ThemeProvider } from "./ThemeContext";
import { SequenceProvider } from "./context/SequenceContextNew"; // Import the StepperProvider

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        createRoot(el).render(
            <ThemeProvider>
                <SequenceProvider> {/* Wrap your app with StepperProvider */}
                    <App {...props} />
                </SequenceProvider>
            </ThemeProvider>
        );
    },
});
