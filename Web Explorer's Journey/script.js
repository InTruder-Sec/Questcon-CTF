let flag = "flag{Test_Flag}}";
let encryptedFlag = "";
function encodeFlag() {
  for (let i = 0; i < flag.length; i++) {
    encryptedFlag += flag.charCodeAt(i);
  }
}

encodeFlag();
document.getElementById("flag").innerHTML = encryptedFlag;
