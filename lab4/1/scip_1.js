let new_id = 0;

function calculate() {
    new_id += 1;

    let v_1 = document.getElementById("var_1").value;
    let v_2 = document.getElementById("var_2").value;
    let calto = Number(v_1) + Number(v_2);

    let par_hist = document.createElement("p");
    par_hist.id = "hist_id_" + new_id;

    let par_resu = document.createElement("p");
    par_resu.id = "res_id_" + new_id;

    let result = document.createTextNode("Result : " + calto);
    let hist_cal = document.createTextNode(v_1 + " + " + v_2 + " = " + calto);

    par_resu.appendChild(result);
    par_hist.appendChild(hist_cal);

    let parentEle = document.getElementById("hist");
    parentEle.appendChild(par_hist);

    let his_1 = document.getElementById("hist_id_1");
    parentEle.insertBefore(par_resu, his_1);

    if (new_id - 1 > 0) {
        let bef_res_id = "res_id_" + (new_id - 1).toString();
        let bef_result = document.getElementById(bef_res_id);

        parentEle.removeChild(bef_result);
    }

}
