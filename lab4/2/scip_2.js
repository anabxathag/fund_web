let isEng = false;

const arr_label = document.querySelectorAll("label");
const arr_option = document.querySelectorAll("option");
const arr_butt = document.querySelector("button");

const thai_lab = ['ชื่อ: ', 'นามสกุล: ', 'ประเทศ: ']
const eng_lab = ['First Name: ', 'Last Name: ', 'Country: ']

const thai_opt = ['เลือกประเทศ','ไทย','เวียดนาม','ลาว','มาเลย์เซีย',
        'สิงคโปร์','ฟิลิปปินส์','เมียนมาร์','กัมพูชา','บรูไน']
const eng_opt = ['Select a Country','Thailand','Vietnam','Laos','Malaysia',
        'Singapore','Philippines','Myanmar','Cambodia','Brunei']

const thai_butt = 'เปลี่ยนเป็นอังกฤษ'
const eng_butt = 'Change to Thai'

function changeLang() {
    isEng = !isEng;

    if (isEng) {
        for (let i = 0; i < arr_label.length; i++) {
            arr_label[i].innerHTML = eng_lab[i];
        }
        for (let i = 0; i < arr_option.length; i++) {
            arr_option[i].innerHTML = eng_opt[i];
        }
        arr_butt.innerHTML = eng_butt;
    } else {
        for (let i = 0; i < arr_label.length; i++) {
            arr_label[i].innerHTML = thai_lab[i];
        }
        for (let i = 0; i < arr_option.length; i++) {
            arr_option[i].innerHTML = thai_opt[i];
        }
        arr_butt.innerHTML = thai_butt;
    }
}
