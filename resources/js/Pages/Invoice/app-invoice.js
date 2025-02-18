import { createRoot } from "react-dom/client";
import Payment from "./Payment";
const invoice = document.getElementById("invoice");

if (invoice) {
    createRoot(invoice).render(<Payment />);
}
