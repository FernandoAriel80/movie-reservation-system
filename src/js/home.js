
const fetchUsers = async () => {
    const response = await fetch("/app/controllers/home/index.php");
    console.log(response);
    if (response) {
        let home = document.querySelector(".div-home");
         const data = await response.json();
         home.innerHTML = data.users.map(user,`
            <ul>
                <il>${user.id}</il>
                <il>${user.name}</il>
                <il>${user.last_name}</il>
            </ul>

            `).join("");
    }
}
