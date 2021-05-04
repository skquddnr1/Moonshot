const thumbsup = function(idx, recommend) {
    this.idx = idx;
    this.recommend = recommend;
};

let boardidx = new thumbsup(idx,recommendcount);

let a = boardidx.recommend

new Vue({ 
    el: "#recommendshow", 
    data: {
      recommend : a
    }
  })