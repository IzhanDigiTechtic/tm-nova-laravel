import React, { useRef, useState } from "react";

const TagInput = ({ onChange }) => {
    const [tags, setTags] = useState([]);
    const [inputValue, setInputValue] = useState("");
    const inputRef = useRef(null);
    const handleInputChange = (e) => {
        setInputValue(e.target.value);
    };

    const handleKeyDown = (e) => {
        if (e.key === "Enter" || e.key === " ") { // Allow space key too
            e.preventDefault();
            if (inputValue.trim() !== "") {
                const newTags = [...tags, inputValue.trim()];
                setTags(newTags);
                setInputValue("");
                onChange(newTags.join(","));
            }
        }
    };
    const handleInput = (e) => {
        const value = e.target.value;
        if (/\s/.test(value)) { // If space is detected
            const newTag = value.trim();
            if (newTag !== "") {
                const newTags = [...tags, newTag];
                setTags(newTags);
                onChange(newTags.join(","));
    
                // Reset input field asynchronously to prevent delay issues
                setTimeout(() => {
                    setInputValue("");
                    if (inputRef.current) {
                        inputRef.current.value = ""; // Force-clear manually
                    }
                }, 0);
            }
        } else {
            setInputValue(value);
        }
    };
    
    const removeTag = (index) => {
        const newTags = tags.filter((_, i) => i !== index);
        setTags(newTags);
        onChange(newTags.join(","));
    };

    return (
        <div className="w-100">
            <input
                type="text"
                ref={inputRef}
                className="form-control p-3 rounded-4"
                placeholder="Enter Colors"
                value={inputValue}
                onInput={handleInput}
                onChange={handleInputChange}
                onKeyDown={handleKeyDown}
                style={{ minHeight: "50px" }} // Better touch target size
            />
            <div className="mt-3 d-flex flex-wrap gap-2">
                {tags.map((tag, index) => (
                    <span
                        key={index}
                        className="badge bg-primary text-white rounded-3 d-flex align-items-center p-2"
                        style={{ cursor: "pointer", fontSize: "14px", gap: "6px" }}
                        onClick={() => removeTag(index)}
                    >
                        {tag}
                        <span
                            className="ms-2"
                            style={{ fontSize: "18px", cursor: "pointer", padding: "0 6px" }}
                        >
                            ×
                        </span>
                    </span>
                ))}
            </div>
        </div>
    );
};

export default TagInput;
