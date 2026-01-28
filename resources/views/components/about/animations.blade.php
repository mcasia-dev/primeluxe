<!-- Intersection Observer Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll(".fade-on-scroll");

        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    // Trigger when the *bottom* of the section enters the viewport
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-0", "translate-y-10");
                        entry.target.classList.add("opacity-100", "translate-y-0");
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 1.0, // 1.0 means trigger only when the whole section is visible (bottom reached)
                rootMargin: "0px 0px 40% 0px", // start slightly before full visibility
            }
        );

        sections.forEach((section) => observer.observe(section));
    });
</script>
