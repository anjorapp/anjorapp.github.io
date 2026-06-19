"use client";

import { useState, useEffect } from "react";
import AOS from 'aos';
import 'aos/dist/aos.css';

export default function Nav() {
    const [open, setOpen] = useState(false);

    const links = [
        { href: "#about", label: "About" },
        { href: "#projects", label: "Projects" },
        { href: "#experience", label: "Experience" },
        { href: "#contact", label: "Contact" },
    ];


    // AOS scroll animation
    useEffect(() => {
        AOS.init({
            duration: 900,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }, []);

    return (
        <div className="fixed top-0 left-0 z-50 w-full border-b border-border backdrop-blur-[10px] bg-background/75">
            <nav className="container flex items-center justify-between h-14">

                {/* Logo */}
                <a href="/" className="font-mono text-primary-bright tracking-wide text-sm">
                    $ anjorapp<span className="cursor" />
                </a>

                {/* Desktop links */}
                <div className="hidden sm:flex gap-10">
                    {links.map((link, index) => (
                        <a key={index} href={link.href} data-aos="fade-down" data-aos-delay={index * 100} className="flex justify-center items-center">
                            <span className="font-medium uppercase tracking-widest no-underline text-sm text-muted hover:text-primary-bright transition-colors duration-200">
                                {link.label}
                            </span>
                        </a>
                    ))}
                </div>

                {/* Hamburger */}
                <button className="sm:hidden flex flex-col gap-1.5 cursor-pointer" onClick={() => setOpen(!open)} aria-label="Toggle menu">
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "rotate-45 translate-y-2" : ""}`} />
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "opacity-0" : ""}`} />
                    <span className={`block w-5 h-px bg-muted transition-all duration-300 ${open ? "-rotate-45 -translate-y-1.5" : ""}`} />
                </button>

            </nav>

            {/* Mobile menu */}
            <div className={`sm:hidden overflow-hidden transition-all duration-300 ${open ? "max-h-64" : "max-h-0"}`}>
                <div className="flex flex-col items-center px-6 py-4 gap-4 border-t border-border">
                    {links.map((link, index) => (
                        <a key={index} href={link.href} data-aos="fade-down" data-aos-delay={index * 100} className="flex justify-center items-center">
                            <span className="font-medium uppercase tracking-widest no-underline text-sm text-muted hover:text-primary-bright transition-colors duration-200">
                                {link.label}
                            </span>
                        </a>
                    ))}
                </div>
            </div>
        </div>
    );
}