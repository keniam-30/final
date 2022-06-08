const menu = {
    "Pages": [
      {"PageTitle": "Todo", "ParentMenu": null },
      {"PageTitle": "Vender", "ParentMenu": null },
      {"PageTitle": "Lo mas Vendido", "ParentMenu": null },
      {"PageTitle": "Prime", "ParentMenu": null },
      {"PageTitle": "Disfruta de envios gratis", "ParentMenu": "Prime" },
      {"PageTitle": "Envios ilimitados", "ParentMenu": "Prime" },
      {"PageTitle": "Envios sin minimo de compra", "ParentMenu": "Prime" },
      {"PageTitle": "Prime Video", "ParentMenu": "Prime" },
      {"PageTitle": "Amazon Basic", "ParentMenu": null },
      {"PageTitle": "Servicio al cliente", "ParentMenu": null },
      {"PageTitle": "Promociones", "ParentMenu": null },
      {"PageTitle": "Moda", "ParentMenu": null },
      {"PageTitle": "Musica", "ParentMenu": null },
      {"PageTitle": "Outlet", "ParentMenu": null },
    ]
  }
  
  // abstracted way to create an element
  const createElement = (type, className, text) => {
    const el = document.createElement(type)
    el.className = className
    if (text) {
      el.appendChild(document.createTextNode(text))
    }
    return el
  }
  
  // print the menu as a tree
  const createMenu = (menu, parentName = null, level = 0) =>
    menu.reduce((ul, item) => {
      if (item.ParentMenu === parentName) {
        const li = createElement(`li`, ` `, )
        const a = createElement(`a`, ` `, item.PageTitle)
        li.appendChild(a)
        ul.appendChild(li)
        // recursively call itself changing the parentName to the current PageTitle
        const children = createMenu(menu, item.PageTitle, level+1)
        if (children.childNodes.length) {
          li.appendChild(children)
        }
      }
      return ul
    }, createElement(`ul`, `nav`))
  
  const app = document.querySelector(`#app`)
  app.appendChild(
    createMenu(menu.Pages, null)
  )
  console.log(app.innerHTML)