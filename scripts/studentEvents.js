function toggleTab(tabId) {
     // Hide all tabs
     var tabs = document.querySelectorAll('.tab-content');
     tabs.forEach(function (tab) {
          tab.classList.remove('active');
     });

     // Show the selected tab
     var selectedTab = document.getElementById(tabId);
     if (selectedTab) {
          selectedTab.classList.add('active');
     }
}