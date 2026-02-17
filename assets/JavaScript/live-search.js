document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('live-search-input');
    const resultsBox = document.getElementById('live-search-results');
    const loadingSpinner = document.getElementById('live-search-loading');
    let timeout;

    searchInput.addEventListener('keyup', function(e) {
        const query = this.value.trim();

        // Hide dropdown if input empty
        if(query === '') {
            resultsBox.style.display = 'none';
            resultsBox.innerHTML = '';
            loadingSpinner.style.display = 'none';
            return;
        }

        // Debounce AJAX
        if(timeout) clearTimeout(timeout);
        timeout = setTimeout(() => {
            resultsBox.style.display = 'none';
            resultsBox.innerHTML = '';
            loadingSpinner.style.display = 'block';

            fetch(ajax_object.ajax_url + '?action=live_search&query=' + encodeURIComponent(query))
                .then(res => res.json())
                .then(data => {
                    loadingSpinner.style.display = 'none';
                    resultsBox.innerHTML = '';

                    if(data.length > 0) {
                        data.forEach(post => {
                            const li = document.createElement('li');
                            li.className = 'list-group-item list-group-item-action d-flex align-items-center gap-2';
                            li.innerHTML = `
                                <img src="${post.image}" alt="${post.title}" style="width:40px;height:40px;object-fit:cover;border-radius:4px;">
                                <a href="${post.url}">${post.title}</a>
                            `;
                            resultsBox.appendChild(li);
                        });
                    } else {
                        const li = document.createElement('li');
                        li.className = 'list-group-item text-center text-muted';
                        li.innerText = 'কোনো পোস্ট পাওয়া যায়নি';
                        resultsBox.appendChild(li);
                    }

                    resultsBox.style.display = 'block';
                })
                .catch(err => {
                    loadingSpinner.style.display = 'none';
                    console.error(err);
                });
        }, 300);
    });

    // Hide dropdown on click outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !resultsBox.contains(e.target)) {
            resultsBox.style.display = 'none';
        }
    });

    // Hide dropdown on ESC
    searchInput.addEventListener('keydown', function(e) {
        if(e.key === 'Escape') {
            resultsBox.style.display = 'none';
        }
    });

    // Optional: Submit form normally
    document.getElementById('live-search-form').addEventListener('submit', function(e) {
        e.preventDefault();
        if(searchInput.value.trim() !== '') {
            window.location.href = '/?s=' + encodeURIComponent(searchInput.value.trim());
        }
    });
});
