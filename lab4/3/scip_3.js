let table = document.getElementById('mytab');

function register() {
    let err = "";

    let stu_id = document.getElementById("stu_id").value;
    if (stu_id.length != 8) {
        err += "\nใส่รหัสนักศึกษาให้ครบ 8 ตัว"
    }
    else if (stu_id.length == 8 && !(isFinite(stu_id))) {
        err += "\nรหัสนักศึกษา ต้องเป็นตัวเลข"
    }
    
    let name = document.getElementById("name").value;
    if (name.length == 0) {
        err += "\nกรุณาใส่ 'ชื่อ' ด้วยครับ"
    }
    else {
        let na_c = false;
        for (let i = 0; i < name.length; i++) {
            if (!isNaN(name[i])) {
                na_c = true
                break;
            }
        }
        if (na_c) {
            err += "\nชื่อ ต้องเป็นตัวอักษร"
        }
    }
    
    let surname = document.getElementById("surname").value;
    if (surname.length == 0) {
        err += "\nกรุณาใส่ 'นามสกุล' ด้วยครับ"
    }
    else {
        let su_c = false;
        for (let i = 0; i < surname.length; i++) {
            if (!isNaN(surname[i])) {
                su_c = true
                break;
            }
        }
        if (su_c) {
            err += "\nนามสกุล ต้องเป็นตัวอักษร"
        }
    }
    
    if (err.length != 0) {
        alert(err)
    } else {
        let row = table.insertRow(-1); //Row position 0,1,2,...,n-1 = last
        let cell, text, tnode;

        const dfr = [row.rowIndex, stu_id, name, surname];
        
        for (let i = 0; i < 4; i++) {
        // create a new column
        cell = row.insertCell(-1);

        text = dfr[i];
        tnode = document.createTextNode(text);
        // add TextNode to column
        cell.appendChild(tnode);
        }    
    }
}
