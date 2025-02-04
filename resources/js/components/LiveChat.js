import React, { useEffect } from "react";

const LiveChat = () => {
    useEffect(() => {
        const script = document.createElement("script");
        script.id = "cd360-snippet";
        script.src =
            "https://alphachatpro.com:/assets/scripts/snippet.js?key=6732a72d13fb6bacf9bb8748";
        script.async = true;

        document.head.appendChild(script);

        return () => {
            const existingScript = document.getElementById("cd360-snippet");
            if (existingScript) {
                document.head.removeChild(existingScript);
            }
        };
    }, []);

    return <></>;
};

export default LiveChat;
