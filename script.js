window.addEventListener("load", () => {
  
  // 監視対象のコールバック関数
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      const target = entry.target;
      if (entry.isIntersecting) {
        target.classList.add("inview");
      }
      // observer.unobserve(targetElement);
    });
  };

  // IntersectionObserverのオプション設定
  const options = {
    root: null,
    rootMargin: '0px', 
    threshold: 0.1
  };

  // IntersectionObserverインスタンスを作成
  const observer = new IntersectionObserver(callback, options);

  // 監視する要素を指定
  const fadein_target = document.querySelectorAll('.fadein_target');
  fadein_target.forEach(target => observer.observe(target));

});


