
document.addEventListener('DOMContentLoaded', () => {
  // Get notification box elements
  const notificationBox = document.querySelector('.notification-box');
  const notificationList = document.querySelector('.notification-list');
  const closeBtn = document.querySelector('.close-btn');

  // Get notification icon elements
  const notificationIcon = document.querySelector('.notification-icon');
  const notificationCount = document.querySelector('.notification-count');

  // Sample notifications
  const notifications = [
    {id: 1, message: 'Notification 1 message', link: 'notification1.html'},
    {id: 2, message: 'Notification 2 message', link: 'notification2.html'},
    {id: 3, message: 'Notification 3 message', link: 'notification3.html'},
    {id: 4, message: 'Notification 4 message', link: 'notification4.html'},
    {id: 5, message: 'Notification 5 message', link: 'notification5.html'},
    {id: 6, message: 'Notification 6 message', link: 'notification6.html'},
  ];

  // Add notifications to the notification list
  notifications.forEach(notification => {
    const notificationEl = document.createElement('div');
    notificationEl.classList.add('notification');
    notificationEl.textContent = notification.message;
    notificationEl.setAttribute('data-created-at', new Date().toISOString());
    notificationEl.addEventListener('click', () => {
      window.location.href = notification.link;
      notificationEl.remove();
      updateNotificationCount();
    });
    notificationList.appendChild(notificationEl);
  });

  // Update notification count and show/hide notification icon badge
  function updateNotificationCount() {
    const notificationCountValue = document.querySelectorAll('.notification').length;
    notificationCount.textContent = notificationCountValue;
    if (notificationCountValue > 0) {
      notificationCount.style.display = 'block';
    } else {
      notificationCount.style.display = 'none';
    }
  }

  // Open notification box when notification icon is clicked
  notificationIcon.addEventListener('click', () => {
    notificationBox.style.display = 'block';
  });

  // Close notification box when close button is clicked
  closeBtn.addEventListener('click', () => {
    notificationBox.style.display = 'none';
  });

  // Auto-hide notifications after 5 days
  setInterval(() => {
    const notifications = document.querySelectorAll('.notification');
    notifications.forEach(notification => {
      const createdAt = new Date(notification.dataset.createdAt);
      const now = new Date();
      const diffInMs = now - createdAt;
      const diffInDays = Math.floor(diffInMs / (1000 * 60 * 60 * 24));
      if (diffInDays >= 5) {
        notification.remove();
        updateNotificationCount();
      }
    });
  }, 86400000); // Run once a day (24 hours * 60 minutes * 60 seconds * 1000 milliseconds)
});
