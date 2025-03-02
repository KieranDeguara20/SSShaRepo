document.getElementById('filter_college_id').addEventListener('change',
    function () {
        let collegeId = this.value || this.options[this.selectedIndex].value
        window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId
    })

    document.getElementById('sort').addEventListener('change', function () {
        let sort = this.value || this.options[this.selectedIndex].value;
        let url = new URL(window.location.href);
        url.searchParams.set('sort', sort);
        window.location.href = url.toString();
    });