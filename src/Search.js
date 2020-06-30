import React, { useState } from 'react'
import { Helmet } from 'react-helmet'
import { useLocation } from 'react-router-dom'
import queryString from 'query-string'

const items = [
  {
    id: 1,
    price: 30000,
    itemName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
  {
    id: 2,
    price: 3000000,
    itemName: 'あの日の火鍋',
    images: [
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
      'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
    ],
  },
]

const Search = () => {
  const location = useLocation()
  const [inputValue, setInputValue] = useState(
    queryString.parse(location.search).q
  )

  const handleInputValue = event => {
    console.log(event.target.value)
    setInputValue(event.target.value)
  }

  return (
    <>
      <Helmet>
        <title>Search</title>
      </Helmet>
      <div>検索結果が表示されるページです。</div>
      <div>クエリはこちら: {location.search}</div>
      <div>ワードだけ取り出すと: {queryString.parse(location.search).q}</div>
      <div>
        これをAPIに渡して検索結果をゲットします。複数条件あるときはどうしたらいいのかは考えられていません
      </div>
      <input value={inputValue} onChange={handleInputValue} />
      <div>　</div>
      <div>
        <button>並び替え</button>
        <button>カテゴリを絞る</button>
      </div>
      <div>　</div>
      <div>検索結果</div>
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

export default Search
