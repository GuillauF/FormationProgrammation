
export function ajaxSansFrotter()
{
    if(window.fetch) {
        // https://randomuser.me/api/?results=2&nat=fr
        fetch("/image/svg/apple.svg").then((r) => {
            if(r.ok) {
                r.text().then((text) => {
                    document.getElementById("todo").innerHTML = text;
                    // document.getElementById("todo").innerHTML = `<img src="${r.results[0].picture.large}" alt="${r.results[0].gender}" >`;
                });
            } else {
                document.getElementById("todo").innerHTML = "Il y a une erreur<br>code : " + r.status;
            }
        }).catch((e) => {
            document.getElementById("todo").textContent = e.message();
        });

        // const f = async () => {
        //     const res = await fetch("https://reqres.in/api/users/");
        //     const json = await res.json();
        //     setUsers(json.data);
        // };


    } else {
        var oReq = new XMLHttpRequest();
        oReq.open("get", "/image/svg/apple.svg", true);
        oReq.onload = function () {
            console.log(this.responseText);
        }
        console.log(oReq.send());
    }
}