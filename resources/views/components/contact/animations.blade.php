<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll(".fade-on-scroll");

        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-0", "translate-y-10");
                        entry.target.classList.add("opacity-100", "translate-y-0");
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 1.0,
                rootMargin: "0px 0px 40% 0px",
            }
        );

        sections.forEach((section) => observer.observe(section));
    });
</script>
