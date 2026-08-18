document.addEventListener("DOMContentLoaded", function () {
 
    const revealElements = document.querySelectorAll(".reveal, .reveal-fade");
 
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");                
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.15, 
        }
    );
 
    revealElements.forEach((el) => observer.observe(el));
 
});