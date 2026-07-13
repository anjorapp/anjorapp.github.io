import type { Metadata } from "next";
import { Bebas_Neue, Rajdhani, DM_Mono } from "next/font/google";
import "./globals.css";
import Nav from "./components/Nav";
import Providers from "./providers";
import Script from 'next/script';

const bebasNeue = Bebas_Neue({
  weight: ["400"],
  style: ["normal"],
  subsets: ["latin"],
  variable: "--font-bebas-neue",
});

const rajdhani = Rajdhani({
  weight: ["300", "400", "500", "600", "700"],
  style: ["normal"],
  subsets: ["latin"],
  variable: "--font-rajdhani",
});

const dmMono = DM_Mono({
  weight: ["300", "400", "500"],
  style: ["normal", "italic"],
  subsets: ["latin"],
  variable: "--font-dm-mono",
});

// footer year 
const year = new Date().getFullYear();

export const metadata: Metadata = {
  verification: {
    google: "7yQCQNJxsp7uy5PhNJ22K_igWEjF6eVMI3UzBPN5hfw",
  },
  title: {
    default: "Anjorapp",
    template: "%s | Anjorapp",
  },

  description:
    "Anjorapp — Portfolio of Anjo Ralph Mingo, Full Stack Web Developer specializing in WordPress development and modern web applications using Next.js, React, and Node.js.",

  keywords: [
    "Anjorapp",
    "Anjo Ralph Mingo",
    "Full Stack Developer",
    "WordPress Developer",
    "Web Developer Philippines",
    "Next.js Developer",
    "React Developer",
    "Frontend Developer",
    "Backend Developer",
    "Portfolio",
  ],

  authors: [{ name: "Anjo Ralph Mingo" }],
  creator: "Anjo Ralph Mingo",
  publisher: "Anjorapp",

  metadataBase: new URL("https://anjorapp.github.io"),

  openGraph: {
    title: "Anjorapp",
    description:
      "Full Stack Web Developer and WordPress Developer portfolio of Anjo Ralph Mingo.",
    url: "https://anjorapp.github.io",
    siteName: "Anjorapp",
    type: "website",
    images: [
      {
        url: "/image.png",
        width: 1200,
        height: 630,
        alt: "Anjorapp - Full Stack & WordPress Developer Portfolio",
      },
    ],
  },

  twitter: {
    card: "summary_large_image",
    title: "Anjorapp",
    description:
      "Full Stack Web Developer and WordPress Developer portfolio of Anjo Ralph Mingo.",
    images: ["/image.png"],
  },

  icons: {
    icon: "/favicon/favicon.ico",
    shortcut: "/favicon/favicon.ico",
    apple: "/favicon/apple-touch-icon.png",
  },

  viewport: "width=device-width, initial-scale=1",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html
      lang="en"
      className={`${bebasNeue.variable} ${rajdhani.variable} ${dmMono.variable}`}
    >
      <head>
        <Script async src="https://www.googletagmanager.com/gtag/js?id=G-BWRTYR8SMV"></Script>
        <Script id="google-analytics" strategy="afterInteractive">
          {`
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BWRTYR8SMV');
          `}
        </Script>
        <meta name="google-site-verification" content="7yQCQNJxsp7uy5PhNJ22K_igWEjF6eVMI3UzBPN5hfw" />
      </head>


      <body className="min-h-full flex flex-col bg-background text-foreground">
        <Nav />
        <Providers>{children}</Providers>
        <footer className="py-8 bg-secondary">
          <div className="container flex flex-col sm:flex-row justify-center sm:justify-between items-center text-xs sm:text-sm">
            <a href="/" className="font-mono text-primary-bright tracking-wide">
              $ anjorapp
            </a>
            <span className="font-mono text-muted">&copy; {year} Anjorapp. All rights reserved.</span>
          </div>
        </footer>
      </body>
    </html >
  );
}