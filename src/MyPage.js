import React, { useState } from 'react'
import { Helmet } from 'react-helmet'

const items = [
  {
    id: 1,
    price: 30000,
    itemName: '取引中の商品です',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
]

const items2 = [
  {
    id: 2,
    price: 3000000,
    itemName: '過去の取引の商品です',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
    ],
  },
]

const Trading = () => {
  return (
    <>
      <div>取引中の商品一覧が表示されます</div>
      {items.map(item => (
        <div key={item.id}>
          <a href={`http://localhost:3000/items/${item.id}`}>
            <img src={item.images[0]} alt={item.itemName} width='200' />
            <p>{item.itemName}</p>
            <p>￥{item.price.toLocaleString()}</p>
          </a>
        </div>
      ))}
    </>
  )
}

const Traded = () => {
  return (
    <>
      <div>過去の取引の商品一覧が表示されます</div>
      {items2.map(item => (
        <div key={item.id}>
          <a href={`http://localhost:3000/items/${item.id}`}>
            <img src={item.images[0]} alt={item.itemName} width='200' />
            <p>{item.itemName}</p>
            <p>￥{item.price.toLocaleString()}</p>
          </a>
        </div>
      ))}
    </>
  )
}

const Favorite = () => {
  return (
    <>
      <div>いいねした商品の一覧が表示されます</div>
      <div>いいねした商品です</div>
      {items2.map(item => (
        <div key={item.id}>
          <a href={`http://localhost:3000/items/${item.id}`}>
            <img src={item.images[0]} alt={item.itemName} width='200' />
            <p>{item.itemName}</p>
            <p>￥{item.price.toLocaleString()}</p>
          </a>
        </div>
      ))}
    </>
  )
}

const MyPage = () => {
  const [a, setA] = useState(true)

  return (
    <>
      <Helmet>
        <title>MyPage</title>
      </Helmet>
      <div>ユーザー自身のみが見られるマイページです。</div>
      <button onClick={() => setA(true)}>取引中</button>
      <button onClick={() => setA(false)}>過去の取引</button>
      {a ? <Trading /> : <Traded />}
      <Favorite />
    </>
  )
}

export default MyPage
