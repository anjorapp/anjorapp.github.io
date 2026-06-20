'use client';
import Script from "next/script";
import '@mdi/font/css/materialdesignicons.min.css';
import { useEffect, useRef, useState } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Parallax } from "react-scroll-parallax";
import Marquee from "react-fast-marquee";
import emailjs from "@emailjs/browser";

gsap.registerPlugin(ScrollTrigger);

export default function Home() {
  // Number counter gsap scroll trigger
  useEffect(() => {
    const elements = gsap.utils.toArray<HTMLElement>(".counter");

    elements.forEach((el) => {
      const target = Number(el.innerText);

      const obj = { value: 0 };

      gsap.fromTo(
        obj,
        { value: 0 },
        {
          value: target,
          duration: 1,
          ease: "none",
          scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none none",
          },
          onUpdate: () => {
            el.innerText = Math.floor(obj.value).toString();
          },
        }
      );
    });
  }, []);

  // email js
  const formRef = useRef<HTMLFormElement>(null);
  const [status, setStatus] = useState<null | "success" | "error">(null);
  useEffect(() => {
    if (!status) return;

    const timer = setTimeout(() => {
      setStatus(null);
    }, 3000);

    return () => clearTimeout(timer);
  }, [status]);

  const sendEmail = (e: React.FormEvent) => {
    e.preventDefault();

    if (!formRef.current) return;

    emailjs
      .sendForm(
        "service_3r71pzr",
        "template_mx0ftgj",
        formRef.current,
        "Yy4ay91jIRcPocH_y"
      )
      .then(
        () => setStatus("success"),
        () => setStatus("error")
      );
  };




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

  const projects = [
    {
      title: 'Open Access BPO',
      img: 'openaccessbpo.png',
      url: 'https://www.openaccessbpo.com',
    },

    {
      title: 'Connected Compass',
      img: 'connectedcompass.png',
      url: 'https://connectedcompass.com/',
    },

    {
      title: 'Hancock & MacArthur',
      img: 'hancockmacarthur.png',
      url: 'https://hancockmacarthur.com/',
    },

    {
      title: '360 Insights',
      img: '360insights.png',
      url: 'https://www.360insights.com/',
    },

    {
      title: 'Find Your Florida',
      img: 'findyourflorida.png',
      url: 'https://www.findyourflorida.net/',
    },

    {
      title: 'American Seashore',
      img: 'americanseashore.png',
      url: 'https://americanseashore.com/',
    },
  ];

  const experiences = [
    {
      date: '2020 - Present',
      jobTitle: 'Senior Web Developer',
      company: 'Open Access BPO · Makati City, PH',
      jobDesc: 'Engineered and maintained corporate websites and digital platforms with high uptime, fast load speeds, and strong security protocols. Built reusable and scalable codebases using modern web standards, reducing technical debt and improving long-term maintainability. Collaborated closely with SEO and content teams to enhance site architecture, boosting search rankings and organic traffic. Integrated third-party REST APIs and backend services to expand platform capabilities and ensure seamless data synchronization. Led troubleshooting efforts to resolve performance bottlenecks and critical system issues in a fast-paced environment.'
    },
    {
      date: '2019 - 2020',
      jobTitle: 'Full Stack Web Developer',
      company: 'Sublime Web Consulting LLC',
      jobDesc: 'Developed and launched scalable web applications using modern full-stack technologies and agile methodologies. Translated complex UI/UX wireframes into responsive, cross-browser compatible frontend interfaces using HTML5, CSS3, and JavaScript frameworks. Built custom WordPress themes, plugins, and page builders tailored to client requirements, improving content management efficiency. Collaborated with stakeholders to gather technical requirements and define clear project scopes and system architecture.'
    },
    {
      date: '2019',
      jobTitle: 'Drone Technical Support',
      company: 'DJI',
      jobDesc: 'Provided technical support for drone hardware and software systems, assisting customers with troubleshooting, maintenance, and operational guidance. Diagnosed issues related to flight control, firmware, and connectivity to ensure safe and optimal drone performance. Delivered clear technical instructions and support in a fast-paced service environment.'
    },
    {
      date: '2018 - 2019',
      jobTitle: 'DESO Technical Support Staff',
      company: 'COMELEC',
      jobDesc: 'Maintained and supported vote counting machines during critical election periods, ensuring reliable system performance. Delivered rapid troubleshooting and on-site technical support to prevent operational downtime. Verified and secured accurate data transmission across distributed network nodes to maintain election integrity.'
    },
    {
      date: '2015 - 2019',
      jobTitle: 'Bachelor of Science in Information Technology',
      company: 'NorthWest Samar State University',
      jobDesc: 'Completed a Bachelor of Science in Information Technology with a strong focus on web development and system design. Recognized with the "Best in Web Development" award for outstanding academic and practical performance.'
    },
    {
      date: '2018',
      jobTitle: 'Advanced Web Development Training',
      company: 'Qonvex Technology',
      jobDesc: 'Completed advanced web development training focused on front-end UI/UX engineering, system debugging, and comprehensive maintenance practices to build efficient and reliable web applications.'
    }
  ];

  const tools = [
    {
      name: "HTML5",
      icon: "/img/icons/html5.png",
    },
    {
      name: "CSS3",
      icon: "/img/icons/css3.png",
    },
    {
      name: "JavaScript",
      icon: "/img/icons/js.png",
    },
    {
      name: "PHP",
      icon: "/img/icons/php.png",
    },
    {
      name: "WordPress",
      icon: "/img/icons/wordpress.png",
    },
    {
      name: "Node.js",
      icon: "/img/icons/nodejs.png",
    },
    {
      name: "React.js",
      icon: "/img/icons/reactjs.png",
    },
    {
      name: "Next.js",
      icon: "/img/icons/nextjs.png",
    },
    {
      name: "Tailwind CSS",
      icon: "/img/icons/tailwindcss.svg",
    },
    {
      name: "jQuery",
      icon: "/img/icons/jquery.png",
    },
    {
      name: "Sass",
      icon: "/img/icons/sass.png",
    },
    {
      name: "Bootstrap",
      icon: "/img/icons/bootstrap.png",
    },
    {
      name: "GitHub",
      icon: "/img/icons/github.svg",
    },
    {
      name: "Java",
      icon: "/img/icons/java.png",
    },
    {
      name: "MySQL",
      icon: "/img/icons/mysql.png",
    },
    {
      name: "Figma",
      icon: "/img/icons/figma.svg",
    },
    {
      name: "Photoshop",
      icon: "/img/icons/photoshop.png",
    },
    {
      name: "Illustrator",
      icon: "/img/icons/illustrator.png",
    },
  ];

  return (
    <>
      <section className="hero-banner overflow-hidden relative w-full min-h-svh flex items-center justify-center">
        <Parallax speed={-50} className="w-full h-full absolute">
          <div id="pt" className="canvas -z-0"></div>
        </Parallax>
        <div className="z-10 flex flex-col items-center justify-center" data-aos="fade-up">
          <span aria-hidden className="subtitle">// portfolio v2.0</span>
          <h1 className="text-7xl sm:text-9xl text-primary-bright">
            Anjorapp
          </h1>
          <p className="text-center text-2xl font-bold font-display tracking-widest text-muted">
            Anjo Ralph Mingo <br />
            Full-Stack Web Developer
          </p>
          <div className="flex gap-6 mt-4 font-ui uppercase font-medium tracking-widest">
            <a data-aos="fade-right" href="#projects" className="outline-none flex justify-center items-center">
              <span className="btn [clip-path:polygon(8px_0%,100%_0%,calc(100%_-_8px)_100%,0%_100%)] bg-primary/75 text-foreground hover:bg-primary px-6 py-3 transition-colors duration-200 leading-none">
                View my work
              </span>
            </a>
            <a data-aos="fade-left" href="#contact" className="outline-none flex justify-center items-center">
              <span className="[clip-path:polygon(8px_0%,100%_0%,calc(100%_-_8px)_100%,0%_100%)] bg-foreground/75 text-background hover:bg-foreground px-6 py-3 transition-colors duration-200 leading-none">
                Get in Touch
              </span>
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

      <div className="section-divider"></div>

      <section className="py-16 bg-secondary scroll-mt-[56px]">
        <div className="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 !w-fit justify-center items-start gap-10">
          {skills.map((skill, index) => (
            <div key={index} data-aos="fade-up" data-aos-delay={index * 100} className="w-fit max-w-[238px] flex flex-col gap-3 justify-center text-center">
              <div className="hexagon bg-primary">
                <span className={skill.icon}></span>
              </div>
              <div>
                <p className="tracking-widest text-2xl font-display text-foreground leading-none">
                  {skill.title}
                </p>
                <p className="text-md">
                  {skill.desc}
                </p>
              </div>
            </div>
          ))}
        </div>
      </section>

      <div className="section-divider"></div>

      <section id="about" className="py-16 scroll-mt-[56px] w-full overflow-hidden">
        <div data-aos="fade-up" className="container">
          <h2 className="text-5xl sm:text-6xl tracking-wider flex flex-col mb-4">
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
                Based in Samar, Philippines, I work with startups and businesses to turn ideas into polished products. Every pixel matters. Every millisecond counts.
              </p>
              <p className="">
                When I'm not writing code, I'm studying design systems, experimenting with new frameworks, and leveling up my skills — because the web never stops evolving.
              </p>
            </div>
            <div className="grid grid-cols-2 gap-6 w-fit m-auto">
              <div data-aos="fade-left" className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl digit">
                  <span className="counter">6</span>+
                </span>
                <span className="subtitle !text-muted">
                  Years Experience
                </span>
              </div>

              <div data-aos="fade-left" className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  <span className="counter">15</span>+
                </span>
                <span className="subtitle !text-muted">
                  Projects Deployed
                </span>
              </div>

              <div data-aos="fade-left" className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  <span className="counter">10</span>+
                </span>
                <span className="subtitle !text-muted">
                  Clients
                </span>
              </div>

              <div data-aos="fade-left" className="flex flex-col p-6 border-1 border-secondary-2 bg-secondary relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[3px] before:h-full before:bg-primary">
                <span className="font-display text-5xl">
                  <span className="mdi mdi-infinity"></span>
                </span>
                <span className="subtitle !text-muted">
                  Cups of coffee
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div className="section-divider"></div>

      <section id="projects" className="py-16 scroll-mt-[56px]">
        <div className="container" data-aos="fade-up">
          <h2 className="text-5xl sm:text-6xl tracking-wider flex flex-col mb-4">
            <span aria-hidden className="subtitle uppercase">
                // Featured Projects
            </span>
            What I've Built
          </h2>
          <div className="projects ">
            {projects.map((project, index) => (
              <div key={index} className="project flex items-end transition-colors duration-200 border-2 border-background hover:border-primary-dim" style={{ backgroundImage: `url('/img/${project.img}')` }}>
                <div className="w-full text-center flex py-2 bg-primary-dim/80 hover:bg-primary-dim text-foreground transition-colors duration-200">
                  <a href={project.url} className="w-full tracking-wider" target="_blank" rel="nofollow">
                    Visit {project.title}
                  </a>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      <div className="section-divider"></div>

      <section className="bg-secondary py-16 scroll-mt-[56px]">
        <div className="w-full" data-aos="fade-up">
          <div className="container" >
            <h2 className="text-5xl sm:text-6xl tracking-wider flex flex-col mb-4">
              <span aria-hidden className="subtitle uppercase">
                // Stack Overview
              </span>
              What I use
            </h2>
          </div>

          <Marquee
            speed={70}
            pauseOnHover={true}
            pauseOnClick={false}
            gradient={false}
            autoFill={true}
            className="mt-8"
          >

            <div className="flex gap-8 mr-8 mt justify-center items-center">
              {tools.map((item, index) => (
                <div key={index} className="flex flex-col gap-2 items-center">
                  <div className="w-[80px] h-[80px] flex items-center justify-center">
                    <img
                      className="max-w-full max-h-full object-contain"
                      src={item.icon}
                      alt={item.name}
                    />
                  </div>
                  <p className="text-sm font-mono">{item.name}</p>
                </div>
              ))}
            </div>
          </Marquee>
        </div>
      </section >

      <div className="section-divider"></div>

      <section id="experience" className="py-16 scroll-mt-[56px]">
        <div className="container" data-aos="fade-up">
          <h2 className="text-5xl sm:text-6xl tracking-wider flex flex-col mb-4">
            <span aria-hidden className="subtitle uppercase">
                // Experience
            </span>
            My Journey
          </h2>
          <div className="pl-8 relative before:content-[''] before:absolute before:top-0 before:left-0 before:w-[2px] before:h-full before:bg-gradient-to-b before:from-primary before:to-transparent">
            {experiences.map((experience, index) => (
              <div key={index} data-aos="fade-up" data-aos-delay={index * 100} className="relative pb-8 before:content-[''] before:absolute before:top-2 before:-left-[36px] before:w-[10px] before:h-[10px] before:bg-primary">
                <span className="subtitle uppercase">
                  {experience.date}
                </span>
                <h3 className="font-display text-2xl tracking-wider">
                  {experience.jobTitle}
                </h3>
                <p className="text-xl tracking-wider">
                  {experience.company}
                </p>
                <p>
                  {experience.jobDesc}
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <div className="section-divider"></div>

      <section id="contact" className="py-16 scroll-mt-[56px]">
        <div className="container" data-aos="fade-up">
          <h2 className="text-5xl sm:text-6xl tracking-wider flex flex-col mb-4">
            <span aria-hidden className="subtitle uppercase">
                // Contact
            </span>
            Let's Connect
          </h2>
          <p>
            Have a project in mind? Want to collaborate or just say hi? My inbox is always open.
          </p>
          <div className="pt-8 grid grid-cols-1 md:grid-cols-2 gap-16">
            <form ref={formRef} onSubmit={sendEmail} className="flex flex-col gap-4">
              <div className="form-group flex flex-col gap-1">
                <label htmlFor="name" className="uppercase tracking-widest">
                  Name<span className="text-primary-bright">*</span>
                </label>
                <input id="name" name="name" type="text" placeholder="John Doe" required
                  className="bg-secondary-2 border border-1 border-border focus:border-primary-dim outline-none px-4 py-3 transition-colors duration-200" />
              </div>

              <div className="form-group flex flex-col gap-1">
                <label htmlFor="email" className="uppercase tracking-widest">
                  Email<span className="text-primary-bright">*</span>
                </label>
                <input id="email" name="email" type="email" placeholder="johndoe@email.com" required
                  className="bg-secondary-2 border border-1 border-border focus:border-primary-dim outline-none px-4 py-3 transition-colors duration-200" />
              </div>

              <div className="form-group flex flex-col gap-1">
                <label htmlFor="name" className="uppercase tracking-widest">
                  Message<span className="text-primary-bright">*</span>
                </label>
                <textarea id="message" name="message" placeholder="Tell me about your project" required
                  className="min-h-[120px] bg-secondary-2 border border-1 border-border focus:border-primary-dim outline-none px-4 py-3 transition-colors duration-200"></textarea>
              </div>
              <button className="form-submit outline-none [clip-path:polygon(8px_0%,100%_0%,calc(100%_-_8px)_100%,0%_100%)] px-8 py-3 self-start bg-primary/80 text-foreground hover:bg-primary focus:bg-primary border-none font-bold tracking-widest uppercase cursor-pointer transition-colors duration-200" type="submit">Send Message ›</button>
            </form>
            <div className="flex flex-col gap-8 justify-start items-start">


              <div className="flex gap-4">
                <div className="w-12 h-12 flex justify-center items-center border border-primary-dim bg-primary-dim/20">
                  <span className="text-2xl mdi mdi-map-marker"></span>
                </div>
                <div className="flex flex-col gap-0">
                  <span className="text-muted uppercase tracking-widest">Location</span>
                  <span>Samar, Philippines</span>
                </div>
              </div>

              <div className="flex gap-4">
                <div className="w-12 h-12 flex justify-center items-center border border-primary-dim bg-primary-dim/20">
                  <span className="text-2xl mdi mdi-email-outline"></span>
                </div>
                <div className="flex flex-col gap-0">
                  <span className="text-muted uppercase tracking-widest">Email</span>
                  <a href="mailto:anjomingo@gmail.com" className="text-foreground">anjomingo@gmail.com</a>
                </div>
              </div>

              <div className="flex gap-4">
                <div className="w-12 h-12 flex justify-center items-center border border-primary-dim bg-primary-dim/20">
                  <span className="text-2xl mdi mdi-calendar-clock"></span>
                </div>
                <div className="flex flex-col gap-0">
                  <span className="text-muted uppercase tracking-widest">Availability</span>
                  <span>Open to freelance projects</span>
                </div>
              </div>

              <div className="flex flex-col gap-2">
                <span className="text-muted uppercase tracking-widest">Find me on</span>
                <div className="flex gap-2">
                  <a href="https://www.linkedin.com/in/anjorapp/" target="_blank" className="aspect-square flex justify-center items-center bg-secondary tracking-widest px-4 py-2 border border-1 border-border text-foreground hover:border-primary-bright hover:text-primary-border hover:text-primary-bright transition-colors duration-200">
                    <span className="text-2xl mdi mdi-linkedin"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {status && (
        <div
          className={`fixed top-18 left-0 right-0 m-auto w-fit rounded-md backdrop-blur-sm px-6 py-3 text-md flex items-center gap-2 ${status === "success" ? "bg-green-700/80" : "bg-primary/80"
            }`}
        >
          {status === "success" ? (
            <>
              <span className="mdi mdi-check-circle text-lg"></span>
              Message sent successfully!
            </>
          ) : (
            <>
              <span className="mdi mdi-close-circle text-lg"></span>
              Failed to send message
            </>
          )}
        </div>
      )}
    </>
  );
}