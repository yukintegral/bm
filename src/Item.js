import React, { useEffect, useState } from 'react'
import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'
import axios from 'axios'

const categories = ['技術書とか', 'PC用品', '洗剤', 'その他']
const conditions = ['未使用', 'ほぼ未使用', '使用感あり']

const Item = ({ match }) => {
  const [item, setItem] = useState({
    images: [],
    post_name: ''
  })

  const paramsId = match.params.id
  const pathName = `posts/${paramsId}`
  const fetchURL = `http://localhost:3001/${pathName}`
  console.log(fetchURL)

  useEffect(() => {
    axios.get(fetchURL).then(response => {
      setItem(response.data)
    })
  }, [fetchURL])

  return (
    <>
      <Helmet>
      <title>闇市 - {item.post_name}</title>
      </Helmet>
      商品をクリックした先の詳細ページです。
      <p>{item.post_name}</p>
      {item.images.map(image => (
          <img src={image} alt='商品の写真' width='200' />
        ))}
      <p>
        出品者: <Link to={`/u/${item.user_id}`}>{item.user_id}</Link>
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
