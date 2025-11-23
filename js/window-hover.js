const statusUpdates = document.getElementById("status-updates");
const changelog = document.getElementById("changelog");
const recentBlogPosts = document.getElementById("recent-blog-posts");

statusUpdates.addEventListener("mouseover", () => {
  statusUpdates.style.zIndex = 3;
  if (changelog.style.zIndex == 3) {
    changelog.style.zIndex = 2;
    recentBlogPosts.style.zIndex = 1;
  } else if (recentBlogPosts.style.zIndex == 3) {
    changelog.style.zIndex = 1;
    recentBlogPosts.style.zIndex = 2;
  }
});

changelog.addEventListener("mouseover", () => {
  changelog.style.zIndex = 3;
  if (statusUpdates.style.zIndex == 3) {
    statusUpdates.style.zIndex = 2;
    recentBlogPosts.style.zIndex = 1;
  } else if (recentBlogPosts.style.zIndex == 3) {
    statusUpdates.style.zIndex = 1;
    recentBlogPosts.style.zIndex = 2;
  }
});

recentBlogPosts.addEventListener("mouseover", () => {
  recentBlogPosts.style.zIndex = 3;
  if (changelog.style.zIndex == 3) {
    changelog.style.zIndex = 2;
    statusUpdates.style.zIndex = 1;
  } else if (statusUpdates.style.zIndex == 3) {
    changelog.style.zIndex = 1;
    statusUpdates.style.zIndex = 2;
  }
});
