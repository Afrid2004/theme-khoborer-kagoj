<form class="d-flex align-items-center position-relative" role="search" id="live-search-form">
  <input id="live-search-input" class="form-control search-btn-height font-size-15 me-1" type="search"
    placeholder="অনুসন্ধান করুন" aria-label="Search" autocomplete="off">
  <button class="btn" type="submit"><i class="bi fs-6 bi-search"></i></button>

  <!-- Loading spinner -->
  <div id="live-search-loading"
    style="position:absolute; right:55px; top:50%; transform:translateY(-50%); display:none;">
    <div class="spinner-border spinner-border-sm text-secondary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Dropdown for live search results -->
  <ul id="live-search-results" class="list-group position-absolute"
    style="top:100%; left:0; right:0; z-index:999; display:none;"></ul>
</form>