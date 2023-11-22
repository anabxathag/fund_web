
function validateForm() {
    let err = "";

    let id_card = document.forms["myForm"]["id_card"].value;
    if (id_card.length != 13) {
        err += "\nใส่เลขบัตรประชาชนให้ครบ 13 ตัว"
    }
    else if (id_card.length == 13 && !(isFinite(id_card))) {
        err += "\nเลขบัตรประชาชน ต้องเป็นตัวเลข"
    }

    let prefix = document.forms["myForm"]["prefix"].value;
    if (prefix == "-") {
        err += "\nต้องมีคำนำหน้า"
    }

    let fname = document.forms["myForm"]["fname"].value;
    if (fname.length < 3) {
        err += "\nใส่ชื่อตั้งแต่ 3 ตัวอักษร ขึ้นไป"
    }
    else if (fname.length >= 3) {
        let f_ch = false;
        for (let i = 0; i < fname.length; i++) {
            if (!isNaN(fname[i])) {
                f_ch = true
                break;
            }
        }
        if (f_ch) {
            err += "\nชื่อ ต้องเป็นตัวอักษร"
        }
    }

    let lname = document.forms["myForm"]["lname"].value;
    if (lname.length < 3) {
        err += "\nใส่นามสกุลตั้งแต่ 3 ตัวอักษร ขึ้นไป"
    }
    else if (lname.length >= 3) {
        let l_ch = false;
        for (let i = 0; i < lname.length; i++) {
            if (!isNaN(lname[i])) {
                l_ch = true
                break;
            }
        }
        if (l_ch) {
            err += "\nนามสกุล ต้องเป็นตัวอักษร"
        }
    }

    let tiu = document.forms["myForm"]["tiu"].value;
    if (tiu.length < 15) {
        err += "\nที่อยู่ ต้องใส่ไม่ต่ำกว่า 15 ตัวอักษร"
    }

    let kwang = document.forms["myForm"]["kwang"].value;
    if (kwang.length < 3) {
        err += "\nใส่ตำบล/แขวง ตั้งแต่ 2 ตัวอักษร ขึ้นไป"
    }
    else if (kwang.length >= 3) {
        let kw_c = false;
        for (let i = 0; i < kwang.length; i++) {
            if (!isNaN(kwang[i])) {
                kw_c = true
                break;
            }
        }
        if (kw_c) {
            err += "\nตำบล/แขวง ต้องเป็นตัวอักษร"
        }
    }

    let khet = document.forms["myForm"]["khet"].value;
    if (khet.length < 3) {
        err += "\nใส่อำเภอ/เขต ตั้งแต่ 2 ตัวอักษร ขึ้นไป"
    }
    else if (khet.length >= 3) {
        let kh_c = false;
        for (let i = 0; i < khet.length; i++) {
            if (!isNaN(khet[i])) {
                kh_c = true
                break;
            }
        }
        if (kh_c) {
            err += "\nอำเภอ/เขต ต้องเป็นตัวอักษร"
        }
    }

    let city = document.forms["myForm"]["city"].value;
    if (city == "-") {
        err += "\nต้องเลือกจังหวัด"
    }

    let zip_code = document.forms["myForm"]["zip_code"].value;
    if (zip_code.length != 5) {
        err += "\nใส่รหัสไปรษณีย์ให้ครบ 5 ตัว"
    }
    else if (zip_code.length == 5 && !(isFinite(zip_code))) {
        err += "\nรหัสไปรษณีย์ ต้องเป็นตัวเลข"
    }

    if (err.length != 0) {
        alert(err)
    }
}
