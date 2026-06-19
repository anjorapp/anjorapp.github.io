"use client";

import { ReactNode } from "react";
import { ParallaxProvider } from "react-scroll-parallax";

export default function Providers({ children }: { children: ReactNode }) {
    return <ParallaxProvider>{children}</ParallaxProvider>;
}