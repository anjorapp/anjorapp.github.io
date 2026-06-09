import Script from "next/script";

export default function Home() {
  return (
    <>
      <div className="hero-banner relative w-full h-screen flex items-center justify-center">
        <div id="pt" className="canvas -z-0"></div>
        <div className="z-10 flex flex-col items-center justify-center">
          <span className="font-mono text-sm text-primary">// portfolio v2.0</span>
          <h1 className="text-9xl font-bold font-display text-primary-bright">
            Anjorapp
          </h1>
          <p className="text-center text-2xl font-bold font-display tracking-widest text-muted">
            Anjo Ralph Mingo <br />
            Full-Stack Web Developer
          </p>
          <div className="flex gap-8 mt-8 font-display tracking-widest">
            <a href="#work"
              className="border border-primary/80 bg-primary/80 text-foreground hover:bg-primary px-6 py-3 transition-colors duration-200 leading-none">
              View my work
            </a>
            <a href="#contact"
              className="border border-foreground text-foreground hover:bg-foreground hover:text-background px-6 py-3 transition-colors duration-200 leading-none">
              Get in Touch
            </a>
          </div>

        </div>
        <div className="scroll-hint">
          <span>Scroll</span>
          <div className="scroll-line"></div>
        </div>
      </div >

      <Script src="/lib/pt.min.js" strategy="beforeInteractive" />
      <Script src="/lib/canvas.js" strategy="afterInteractive" />
    </>
  );
}