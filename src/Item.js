import React, { useEffect, useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'
import axios from 'axios'

const categories = ['技術書とか', 'PC用品', '洗剤', 'その他']

const conditions = ['未使用', 'ほぼ未使用', '使用感あり']

// const item = {
//   id: 1,
//   user_id: 'ippei',
//   message:
//     '商品説明です。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。',
//   category_id: 1,
//   post_name: 'あの日の火鍋',
//   post_status_id: 1,
//   createdAt: '2020-07-01 00:00:00',
//   price: 3000000000,
//   images: [
//     'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
//     'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
//   ],
//   favorite: true,
//   sall: true,
// }

const fetchURL = `http://localhost:3001/items/2`

const Item = () => {
  const [item, setItem] = useState({
    images: []
  })

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      setItem(response.data)
    })
  }, [])

  // console.log(item.images, typeof item.images)

  return (
    <>
      <Helmet>
        {/* <title>闇市 - {item.post_name}</title> */}
      </Helmet>
      商品をクリックした先の詳細ページです。
      <p>{item.post_name}</p>
      {item && item.images.map(image => (
        <img src={image} alt='商品の写真' width='200' />
      ))}
      <p>
        出品者: <Link to={`/u/${item.id}`}>{item.user_id}</Link>
      </p>
      <p>カテゴリー: {categories[item.category_id]}</p>
      <p>商品の状態: {conditions[item.post_status_id]}</p>
      {/* <p>￥{item.price.toLocaleString()} </p> */}
      <button>購入申請をする</button>
      <p>{item.message}</p>
      <p>いいね: {item.favorite ? '❤️' : '♡'}</p>
    </>
  )
}

export default Item
