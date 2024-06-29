document.addEventListener('DOMContentLoaded', () => {
    const dietInfoForm = document.getElementById('dietInfoForm');

    if (dietInfoForm) {
        dietInfoForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(dietInfoForm);
            const data = Object.fromEntries(formData.entries());

            const token = localStorage.getItem('token');
            if (!token) {
                alert('Please login first');
                return;
            }

            const response = await fetch('http://localhost/diet_recommendation_system/diet_info.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify(data),
            });

            const result = await response.text();
            alert(result);
        });
    }
});
``