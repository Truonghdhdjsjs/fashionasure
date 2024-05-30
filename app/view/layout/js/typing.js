const text = document.getElementById('banner_zone_tilte_txt_noidung');
const messagen = [
    "disruptive fashion",
    'level determination',
    'self-confident personality',
    'only available in asuze'
];
let messagenIndex = 0;
let charindex = 0;

function typing() {
    const currentMess = messagen[messagenIndex];
    if (charindex <= currentMess.length) {
        const currentChar = currentMess.substring(0, charindex);
        text.textContent = currentChar;
        charindex++;
        setTimeout(typing, 150);
    } else {
        // Move to the next message when typing is finished
        messagenIndex = (messagenIndex + 1) % messagen.length;
        charindex = 0;
        setTimeout(typing, 150);
    }
}

typing();
