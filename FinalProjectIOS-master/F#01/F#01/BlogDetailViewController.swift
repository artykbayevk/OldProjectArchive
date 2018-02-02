//
//  BlogDetailViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 28.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit
import CoreData

class BlogDetailViewController: UIViewController {
    
    var commentList:[Comment] = []
    var commentItem:Comment!
    @IBOutlet weak var commentTextView: UITextView!
    @IBOutlet weak var blogComment: UITextField!
    @IBOutlet weak var dateLabelDetail: UILabel!
    @IBOutlet weak var textViewDetail: UITextView!
    @IBOutlet weak var authorLabelDetail: UILabel!
    @IBOutlet weak var titleLabelDetail: UILabel!
    @IBOutlet weak var backImage: UIImageView!
    var appDelegate: AppDelegate?
    var managedObjectContext: NSManagedObjectContext?
    var something:String = ""
    var dateForSegue:String = ""
    var titleForSegue:String = ""
    var textForSegue:String = ""
    var authorForSegue:String = ""
    
    override func viewDidLoad() {
        super.viewDidLoad()
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        dateLabelDetail?.text = "Style: \(dateForSegue)"
        textViewDetail?.text = textForSegue
        titleLabelDetail?.text = titleForSegue
        authorLabelDetail?.text = "By: \(authorForSegue)"
        // Do any additional setup after loading the view.
        appDelegate = UIApplication.sharedApplication().delegate as? AppDelegate
        managedObjectContext = appDelegate?.managedObjectContext
        getComment()
        let tap: UIGestureRecognizer = UITapGestureRecognizer(target: self,action: "keyboardHidding")
        view.addGestureRecognizer(tap)
        
    }
    
    func keyboardHidding(){
        self.view.endEditing(true)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func back(sender: AnyObject) {
        dismissViewControllerAnimated(true, completion: nil)
        
    }


    @IBAction func addComment(sender: AnyObject) {
        if let manageObjectContext = (UIApplication.sharedApplication().delegate as? AppDelegate)?.managedObjectContext{
            commentItem = NSEntityDescription.insertNewObjectForEntityForName("Comment", inManagedObjectContext: manageObjectContext) as! Comment
            
            commentItem.comment = blogComment?.text
            commentItem.title = titleForSegue
            do{
                try manageObjectContext.save()
                print(commentItem.comment)
                print(commentItem.title)
            } catch {
                print(error)
                return
            }
        }
        getComment()
        blogComment.text = ""
    }
    
    func getComment(){
        let fetchRequest = NSFetchRequest(entityName: "Comment")
        do {
            if let result = try managedObjectContext?.executeFetchRequest(fetchRequest) as? [Comment]{
                if commentList != result{
                    commentList = result
                }
            }
        }catch{
            print(error)
        }
        something = ""
        for item in commentList{
            if item.title == titleForSegue{
            something = something + item.comment! + ",By :" + authorForSegue.capitalizedString + "\n"
            }
        }
        commentTextView.text = something
    }
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
