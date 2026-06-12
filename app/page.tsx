import Script from "next/script";
import '@mdi/font/css/materialdesignicons.min.css';

export default function Home() {
  const skills = [
    {
      icon: "mdi mdi-speedometer",
      title: "Fast",
      desc: "Fast load times and lag-free interaction are my highest priority."
    },
    {
      icon: "mdi mdi-cellphone-link",
      title: "Responsive",
      desc: "Layouts that work seamlessly on any device, big or small."
    },
    {
      icon: "mdi mdi-lightbulb-on-outline",
      title: "Intuitive",
      desc: "Strong focus on easy-to-use, intuitive UX/UI design."
    },
    {
      icon: "mdi mdi-rocket-launch",
      title: "Dynamic",
      desc: "Bringing websites to life with interactive and dynamic experiences."
    }
  ];

  return (
    <>
      <section className="hero-banner relative w-full h-svh flex items-center justify-center">
        <div id="pt" className="canvas -z-0"></div>
        <div className="z-10 flex flex-col items-center justify-center">
          <span aria-hidden className="subtitle">// portfolio v2.0</span>
          <h1 className="text-7xl sm:text-9xl text-primary-bright">
            Anjorapp
          </h1>
          <p className="text-center text-2xl font-bold font-display tracking-widest text-muted">
            Anjo Ralph Mingo <br />
            Full-Stack Web Developer
          </p>
          <div className="flex gap-6 mt-8 font-ui uppercase font-medium tracking-widest">
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
      </section>
      <Script src="/lib/pt.min.js" strategy="beforeInteractive" />
      <Script src="/lib/canvas.js" strategy="afterInteractive" />

      <section className="py-16 bg-secondary border-y border-primary-dim">
        <div className="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 !w-fit justify-center items-start gap-10">
          {skills.map((skill, index) => (
            <div key={index} className="w-fit max-w-[238px] flex flex-col gap-1.5 justify-center text-center">
              <div className="hexagon bg-primary">
                <span className={skill.icon}></span>
              </div>
              <p className="text-foreground text-2xl font-display text-foreground leading-none">
                {skill.title}
              </p>
              <p className="text-md">
                {skill.desc}
              </p>
            </div>
          ))}
        </div>
      </section>

      <section id="about" className="py-16 border-b border-primary-dim">
        <div className="container">
          <h2 className="text-5xl sm:text-6xl tracking-wide flex flex-col">
            <span aria-hidden className="subtitle uppercase">
                // About me
            </span>
            Who I Am
          </h2>
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-20 gap-y-10 items-start">
            <div className="">
              <p className="mb-4">
                I'm Anjo Ralph Mingo — a full stack web developer with a passion for building fast, beautiful, and functional digital experiences. From custom WordPress themes to modern JavaScript frontends, I care about the craft.
              </p>
              <p className="mb-4">
                Based in Calbayog, Philippines, I work with startups and businesses to turn ideas into polished products. Every pixel matters. Every millisecond counts.
              </p>
              <p className="">
                When I'm not writing code, I'm studying design systems, experimenting with new frameworks, and leveling up my skills — because the web never stops evolving.
              </p>
            </div>
            <div className="grid grid-cols-2 gap-6 w-fit m-auto">
              <div className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  6+
                </span>
                <span className="subtitle !text-muted">
                  Years Experience
                </span>
              </div>

              <div className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  15+
                </span>
                <span className="subtitle !text-muted">
                  Projects Deployed
                </span>
              </div>

              <div className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  10+
                </span>
                <span className="subtitle !text-muted">
                  Clients
                </span>
              </div>

              <div className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  ∞
                </span>
                <span className="subtitle !text-muted">
                  Cups of coffee
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}