import React from 'react'
import { Helmet } from 'react-helmet'

const categories = ['技術書とか', 'PC用品', '洗剤', 'その他']

const conditions = ['未使用', 'ほぼ未使用', '使用感あり']

const item = {
  id: 2,
  userId: 'kichis',
  categoryId: 1,
  itemName: 'あの日の火鍋',
  condition: 1,
  createdAt: '2020-07-01 00:00:00',
  price: 3000000000,
  itemDescription:
    '商品説明です。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。校舎で火鍋を食べましょう。',
  images: [
    'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228232047.jpg',
    'https://cdn-ak.f.st-hatena.com/images/fotolife/k/kazuhi_ra/20191228/20191228231928.jpg',
  ],
  favorite: true,
}

const Item = () => {
  return (
    <>
      <Helmet>
        <title>闇市 - {item.itemName}</title>
      </Helmet>
      商品をクリックした先の詳細ページです。
      <p>{item.itemName}</p>
      {item.images.map(image => (
        <img src={image} alt='商品の写真' width='200' />
      ))}
      <p>出品者: {item.userId}</p>
      <p>カテゴリー: {categories[item.categoryId]}</p>
      <p>商品の状態: {conditions[item.condition]}</p>
      <p>￥{item.price.toLocaleString()} </p>
      <button>購入申請をする</button>
      <p>{item.itemDescription}</p>
      <p>いいね: {item.favorite ? '❤️' : '♡'}</p>
    </>
  )
}

export default Item
