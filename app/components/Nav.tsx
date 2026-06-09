"use client";

import { useState } from "react";

const links = [
    { href: "#about", label: "About" },
    { href: "#work", label: "Work" },
    { href: "#experience", label: "Experience" },
    { href: "#contact", label: "Contact" },
];

export default function Nav() {
    const [open, setOpen] = useState(false);

    return (
        <div className="fixed top-0 left-0 z-50 w-full  border-b border-border backdrop-blur-[5px] bg-background/75">
            <nav className="max-w-4xl mx-auto w-full flex items-center justify-between px-6 md:px-12 h-14">

                {/* Logo */}
                <a href="/" className="font-mono text-primary-bright tracking-wide text-[13px]">
                    $ anjorapp<span className="cursor" />
                </a>

                {/* Desktop links */}
                <div className="hidden sm:flex gap-10">
                    {links.map((link) => (
                        <a key={link.href} href={link.href} className="font-medium uppercase tracking-widest text-muted no-underline transition-colors duration-200 hover:text-primary-bright text-[12px]">
                            {link.label}
                        </a>
                    ))}
                </div>

                {/* Hamburger */}
                <button className="sm:hidden flex flex-col gap-1.5 cursor-pointer" onClick={() => setOpen(!open)} aria-label="Toggle menu">
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "rotate-45 translate-y-2" : ""}`} />
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "opacity-0" : ""}`} />
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "-rotate-45 -translate-y-2" : ""}`} />
                </button>

            </nav>

            {/* Mobile menu */}
            <div className={`sm:hidden overflow-hidden transition-all duration-300 ${open ? "max-h-64" : "max-h-0"}`}>
                <div className="flex flex-col px-6 pb-4 gap-4 border-t border-border">
                    {links.map((link) => (
                        <a key={link.href} href={link.href} onClick={() => setOpen(false)} className="font-medium uppercase tracking-widest text-muted no-underline transition-colors duration-200 hover:text-primary-bright text-[12px] pt-4">
                            {link.label}
                        </a>
                    ))}
                </div>
            </div>
        </div>
    );
}