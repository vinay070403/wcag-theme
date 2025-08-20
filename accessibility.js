// Accessible menu toggle + announcements with wp.a11y.speak()
(function(){
  function ready(fn){ if(document.readyState!=='loading'){fn()} else {document.addEventListener('DOMContentLoaded',fn)} }
  ready(function(){
    var btn = document.getElementById('menu-toggle');
    var menu = document.getElementById('primary-menu');
    if(!btn || !menu) return;

    function setExpanded(expanded){
      btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
      // Show/Hide menu for mobile
      menu.style.display = expanded ? 'block' : 'none';
      if (window.wp && wp.a11y && typeof wp.a11y.speak === 'function') {
        wp.a11y.speak(expanded ? 'Main menu expanded' : 'Main menu collapsed', 'polite');
      }
    }

    setExpanded(false);

    btn.addEventListener('click', function(){
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    });

    // Close on Escape
    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape' && btn.getAttribute('aria-expanded') === 'true') {
        setExpanded(false);
        btn.focus();
      }
    });
  });
})();