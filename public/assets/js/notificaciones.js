
document.addEventListener('DOMContentLoaded', ()=> {

    
    const notificationCount = document.querySelector('#notiCount');
    const notificationCount2 = document.querySelector('#notiCount2');
    const notificationList = document.querySelector('#noti-list');
    const showAllBtn = document.querySelector('.notify-all');
    const notificationBox = document.querySelector('.noti');
    const notiListCard = document.querySelector('#notiListCard');
    const closeNoti = document.querySelector('.closeNoti');
    const notiIcon = document.querySelector('#notiIcon');
    const closeCard = document.querySelector('.closeCard');
    const notificationsArr = [];
    const notifications = {
        icon: 'https://img.icons8.com/windows/18/FFFFFF/secured-letter--v1.png',
        title: 'this is your text',
        text: 'Dummy text of the printing and typesetting industry.',
        date: '06/12/20',
        class: "bolder"
    }

    const notifications2 = {
        icon: 'https://img.icons8.com/windows/18/FFFFFF/open-envelope.png',
        title: 'this is your text',
        text: 'Dummy text of the printing and typesetting industry.',
        date: '06/12/20',
        class: 'bolder100'
    }

    notificationsArr.push(notifications)
    notificationsArr.push(notifications2)
    notificationsArr.push(notifications)
    notificationsArr.push(notifications2)
    
    const updateNoficationCount = (number) => {
        if(notificationCount) notificationCount.innerText = `(${number})` || "(0)";
        if(notificationCount2) notificationCount2.innerText = `(${number})` || "(0)";
    }

    const updateNofications = (arr) => {
        let innerNotifications = "";
        updateNoficationCount(arr.length);      
        let number = 0;
        arr.forEach(el => {
            number++
            innerNotifications += `<a href="javascript:void(0);" data-toggle="collapse" data-target="#demo${number}" class="dropdown-item notify-item active hoverNotifications" style="padding: 8px 20px; border-top: 1px solid #d9d8d8">            
                                        <div class="notify-details" style="margin-left: 0px;">
                                            <div class="notify-icon bg-danger" style="margin: 3px 10px 0 0; display: block!important">
                                                <img src="https://img.icons8.com/windows/18/FFFFFF/secured-letter--v1.png" style="line-height: 33px;"/>
                                            </div>
                                            <p class="d-flex justify-content-between" style="align-self: center; margin-top:10px;">
                                                <b class="notify-details" style="margin-left:0px; font-size: 13px;">${el.title}</b>
                                                <b style="font-size: 13px">${el.date}</b>
                                            </p>
                                            <div id="demo${number}" class="collapse">
                                                ${el.text}
                                            </div> 
                                        </div>
                                    </a>`
        })        
        
        if(notificationBox) notificationBox.innerHTML = innerNotifications;

        if(arr.length > 3) if(showAllBtn) showAllBtn.style.display = 'block'
        
        if(arr.length > 0) {
            let element = `<span class="badge badge-danger badge-pill noti-icon-badge">${arr.length}</span>`
            $("#notiIcon").append(element)
        }
    }

    const loadNotificationList = (arr) => {
        updateNoficationCount(arr.length);  
        let innerList = "";
        let number = 0;
        arr.forEach(el => {
            number++
                // <div class="notify-icon bg-danger" style="margin: 3px 10px 0 0; display: block!important"></div>
            innerList += `<a href="javascript:void(0);" data-toggle="collapse" data-target="#demo${number}" class="dropdown-item notify-item active hoverNotifications" style="padding: 8px 20px; border-top: 1px solid #d9d8d8">            
                                <div class="notify-details" style="margin-left: 0px;">
                                    <div class="notify-icon" style="margin: 3px 10px 0 0; display: block!important">
                                        <img src="${el.icon}" width="36" style="line-height: 33px;"/>
                                    </div>
                                        
                                    
                                    <p class="d-flex justify-content-between"  style="align-self: center; margin-top:10px;">
                                        <b class="notify-details ${el.class}" style="margin-left:0px; font-size: 13px;">${el.title}</b>
                                        <b style="font-size: 13px" class="${el.class}">${el.date}</b>
                                    </p>
                                    <div id="demo${number}" class="collapse">
                                        ${el.text}
                                    </div> 
                                </div>
                            </a>`
        })

        if(notificationList) notificationList.innerHTML = innerList;
        if(arr.length > 3) if(showAllBtn) showAllBtn.style.display = 'block'
        
        if(arr.length > 0) {
            let element = `<span class="badge badge-danger badge-pill noti-icon-badge">${arr.length}</span>`
            $("#notiIcon").append(element)
        }
    }

    if(showAllBtn)
        showAllBtn.addEventListener('click', () => {
            notificationList.style.maxHeight = '500px'
            showAllBtn.style.display = 'none'
        })

    if(notiIcon)
        notiIcon.addEventListener('click', () => {
            if(closeCard) closeCard.click()
            notiListCard.style.display = 'block';            
        })
    
    
    if(closeNoti)
        closeNoti.addEventListener('click', () => {
            notiListCard.style.display = 'none';
            if(notificationsArr.length > 3) if(showAllBtn) showAllBtn.style.display = 'block'
            notificationList.style.maxHeight = '220px'
        })
       

    loadNotificationList(notificationsArr)  
    loadNotificationList(notificationsArr)  
    
})

