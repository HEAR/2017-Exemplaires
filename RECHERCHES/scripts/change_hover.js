var nb_livres=6;    
var mon = document.getElementsByClassName('un_livre_mon');
var ren = document.getElementsByClassName('un_livre_ren');
var lyo = document.getElementsByClassName('un_livre_lyo');
var val = document.getElementsByClassName('un_livre_val');
var str = document.getElementsByClassName('un_livre_str');
var bru = document.getElementsByClassName('un_livre_bru');
var gen = document.getElementsByClassName('un_livre_gen');
var tou = document.getElementsByClassName('un_livre_tou');
var bes = document.getElementsByClassName('un_livre_bes');

//ON HOVER CHANGE BOX-SHADOW

//pour tous
var color_base="0px 0px 50px white";
var color_change="0 0 0 black";

//mon
function changeColorMon(colorMon) {
    for(var i = 0; i < nb_livres; i ++) {
        mon[i].style.boxShadow = colorMon;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    mon[i].onmouseover = function() {
        changeColorMon(color_base);
    };
    mon[i].onmouseout = function() {
        changeColorMon(color_change);
    };
}

//ren
function changeColorRen(colorRen) {
    for(var i = 0; i < nb_livres; i ++) {
        ren[i].style.boxShadow = colorRen;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    ren[i].onmouseover = function() {
        changeColorRen(color_base);
    };
    ren[i].onmouseout = function() {
        changeColorRen(color_change);
    };
}

//lyo
function changeColorLyo(colorLyo) {
    for(var i = 0; i < nb_livres; i ++) {
        lyo[i].style.boxShadow = colorLyo;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    lyo[i].onmouseover = function() {
        changeColorLyo(color_base);
    };
    lyo[i].onmouseout = function() {
        changeColorLyo(color_change);
    };
}

//val
function changeColorVal(colorVal) {
    for(var i = 0; i < nb_livres; i ++) {
        val[i].style.boxShadow = colorVal;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    val[i].onmouseover = function() {
        changeColorVal(color_base);
    };
    val[i].onmouseout = function() {
        changeColorVal(color_change);
    };
}

//str
function changeColorStr(colorStr) {
    for(var i = 0; i < nb_livres; i ++) {
        str[i].style.boxShadow = colorStr;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    str[i].onmouseover = function() {
        changeColorStr(color_base);
    };
    str[i].onmouseout = function() {
        changeColorStr(color_change);
    };
}

//bru <3
function changeColorBru(colorBru) {
    for(var i = 0; i < nb_livres; i ++) {
        bru[i].style.boxShadow = colorBru;
    }
}

//gen
for(var i = 0; i < nb_livres; i ++) {
    bru[i].onmouseover = function() {
        changeColorBru(color_base);
    };
    bru[i].onmouseout = function() {
        changeColorBru(color_change);
    };
}
function changeColorGen(colorGen) {
    for(var i = 0; i < nb_livres; i ++) {
        gen[i].style.boxShadow = colorGen;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    gen[i].onmouseover = function() {
        changeColorGen(color_base);
    };
    gen[i].onmouseout = function() {
        changeColorGen(color_change);
    };
}

//tou
function changeColorTou(colorTou) {
    for(var i = 0; i < nb_livres; i ++) {
        tou[i].style.boxShadow = colorTou;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    tou[i].onmouseover = function() {
        changeColorTou(color_base);
    };
    tou[i].onmouseout = function() {
        changeColorTou(color_change);
    };
}

//bes
function changeColorBes(colorBes) {
    for(var i = 0; i < nb_livres; i ++) {
        bes[i].style.boxShadow = colorBes;
    }
}
for(var i = 0; i < nb_livres; i ++) {
    bes[i].onmouseover = function() {
        changeColorBes(color_base);
    };
    bes[i].onmouseout = function() {
        changeColorBes(color_change);
    };
}

//ON HOVER CHANGE NAME
//mon
$(function() {
  $('.un_livre_mon').hover(function() {
    $('#nom_mon').css('display', 'block');
  }, function() {
    $('#nom_mon').css('display', 'none');
  });
});

//ren
$(function() {
  $('.un_livre_ren').hover(function() {
    $('#nom_ren').css('display', 'block');
  }, function() {
    $('#nom_ren').css('display', 'none');
  });
});

//lyo
$(function() {
  $('.un_livre_lyo').hover(function() {
    $('#nom_lyo').css('display', 'block');
  }, function() {
    $('#nom_lyo').css('display', 'none');
  });
});

//val
$(function() {
  $('.un_livre_val').hover(function() {
    $('#nom_val').css('display', 'block');
  }, function() {
    $('#nom_val').css('display', 'none');
  });
});

//str
$(function() {
  $('.un_livre_str').hover(function() {
    $('#nom_str').css('display', 'block');
  }, function() {
    $('#nom_str').css('display', 'none');
  });
});

//bru
$(function() {
  $('.un_livre_bru').hover(function() {
    $('#nom_bru').css('display', 'block');
  }, function() {
    $('#nom_bru').css('display', 'none');
  });
});

//gen
$(function() {
  $('.un_livre_gen').hover(function() {
    $('#nom_gen').css('display', 'block');
  }, function() {
    $('#nom_gen').css('display', 'none');
  });
});

//tou
$(function() {
  $('.un_livre_tou').hover(function() {
    $('#nom_tou').css('display', 'block');
  }, function() {
    $('#nom_tou').css('display', 'none');
  });
});

//bes
$(function() {
  $('.un_livre_bes').hover(function() {
    $('#nom_bes').css('display', 'block');
  }, function() {
    $('#nom_bes').css('display', 'none');
  });
});