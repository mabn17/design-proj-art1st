---
views:
  main:
    template: anax/v2/blog-list/default
    data:
      class: blog
      dateFormat: j F Y
      meta:
        type: toc
        orderby: publishTime
        orderorder: desc

  byline: false
  block-about: false
  article-toc: false
---
