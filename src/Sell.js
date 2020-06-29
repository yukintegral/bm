import React from 'react'
import { Link } from 'react-router-dom'
import { Helmet } from 'react-helmet'
import Dnd from './Dnd'

// フォームの内容をuseStateでゲットしてpostObjに格納し、APIでPOSTする予定
const postObj = {
  images: ['', '', ''],
  itemName: '',
  itemDescription: '',
  categoryId: 1,
  condition: 1,
  price: 30000,
}

const Sell = () => {
  return (
    <>
      <Helmet>
        <title>Sell.js</title>
      </Helmet>
      <Dnd />
      <div>商品名</div>
      <input />
      <div>商品の説明</div>
      <textarea />
      <div>商品のカテゴリー</div>
      <select>
        <option selected label='選択してください'>
          選択してください
        </option>
        <option label='技術書とか'>技術書とか</option>
        <option label='PC用品'>PC用品</option>
        <option label='洗剤'>洗剤</option>
        <option label='その他'>その他</option>
      </select>
      <div>商品の状態</div>
      <select>
        <option selected label='選択してください'>
          選択してください
        </option>
        <option label='未使用'>未使用</option>
        <option label='ほぼ未使用'>ほぼ未使用</option>
        <option label='使用感あり'>使用感あり</option>
      </select>
      <div>商品の価格</div>
      <input />
      <div>　</div>
      <div>
        <button>出品する</button>
      </div>
      <div>　</div>
      <div>
        <button>下書き保存(余裕なければ機能削除)</button>
      </div>
      <div>　</div>
      <div>
        <Link to='/'>もどる</Link>
      </div>
    </>
  )
}

export default Sell
